<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Survey Tracker overview mod.
 *
 * @package    block_surveytrackerinfo
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net/)
 * @author     FHGR - Marc-Alexander Iten
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 class block_surveytrackerinfo extends block_base {
    public function init() {
        $this->title = get_string('blockname', 'block_surveytrackerinfo');
    }

    private function get_participations_of_user() {
      global $DB, $USER;

      return $DB->get_record_sql(
        'SELECT COUNT(id) AS contestantcount,
        SUM(points) AS contestantpoints
        FROM {surveytracker_participants} WHERE participantid = :userid AND enddate IS NOT NULL;',
        [
          'userid' => $USER->id,
        ]
      );
    }

    private function get_surveyinfos_of_user() {
      global $DB, $USER;

      return $DB->get_record_sql(
        'SELECT crs.id,
        COUNT(crs.id) AS surveys,
        SUM(crp.crpcount) AS surveyparticipations,
        SUM(crp.crpsum) AS surveyparticipationspoints
        FROM {surveytracker_surveys} crs
          LEFT JOIN (
            SELECT surveyid, COUNT(crp.id) AS crpcount, SUM(crp.points) AS crpsum
            FROM {surveytracker_participants} crp
            WHERE crp.enddate IS NOT NULL
            GROUP BY crp.surveyid
          ) AS crp
          ON crp.surveyid = crs.id
        WHERE crs.creatorid = :userid
        GROUP BY crs.creatorid;',
        [
          'userid' => $USER->id,
        ]
      );
    }

    public function get_content() {

      if ($this->content !== null) {
        return $this->content;
      }

      $this->content = new stdClass;
      $this->content->text = '';

      $participations = $this->get_participations_of_user();
      $this->content->text .= get_string('participations', 'block_surveytrackerinfo') . ': ' . ($participations->contestantcount ?? '0') . '<br>';
      $this->content->text .= get_string('collectedpoints', 'block_surveytrackerinfo') . ': ' . ($participations->contestantpoints ?? '0') . '<br>';

      $surveys = $this->get_surveyinfos_of_user();
      $this->content->text .= '<hr>';
      $this->content->text .= get_string('openedsurveys', 'block_surveytrackerinfo') . ': ' . ($surveys->surveys ?? '0') . '<br>';
      $this->content->text .= get_string('participants', 'block_surveytrackerinfo') . ': ' . ($surveys->surveyparticipations ?? '0') . '<br>';
      $this->content->text .= get_string('totalpoints', 'block_surveytrackerinfo') . ': ' . ($surveys->surveyparticipationspoints ?? '0') . '<br>';

      $this->content->footer = '';

      return $this->content;
    }
}
