<?php

class participantlib {

  static function get_participations_of_user() {
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

  static function get_surveyinfos_of_user() {
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
}
