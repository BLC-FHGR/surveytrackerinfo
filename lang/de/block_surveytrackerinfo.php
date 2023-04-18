<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Survey Tracker block
 *
 * @package    block_surveytrackerinfo
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net/)
 * @author     FHGR - Marc-Alexander Iten
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockname'] = 'Umfragebörse Info';
$string['blocknameplural'] = 'Umfragebörsen';
$string['blockname_help'] = 'Mit der Umfragebörse können Studierende externe Umfragen zur Verfügung stellen. Alle Studierenden können an diesen Umfragen teilnehmen und erhalten Punkte für deren Teilnahme.';
$string['blockname_link'] = 'block/surveytrackerinfo/view';
$string['pluginname'] = 'Umfragebörse Info';
$string['pluginadministration'] = 'Umfragebörse Administration';
$string['surveytrackerinfo'] = 'Umfragebörse';
$string['userlist'] = 'Teilnehmerliste';
$string['showuserlist'] = 'Teilnehmerliste anzeigen';

$string['participations'] = 'Teilnahmen';
$string['collectedpoints'] = 'erhaltene Punkte';
$string['openedsurveys'] = 'gestartete Umfragen';
$string['participants'] = 'Teilnehmer';
$string['totalpoints'] = 'erzielte Punkte';

$string['surveytrackerinfo:addinstance'] = 'Umfragebörse hinzufügen';
$string['surveytrackerinfo:myaddinstance'] = 'Umfragebörse hinzufügen';
$string['surveytrackerinfo:view'] = 'Umfragebörse sehen';
$string['surveytrackerinfo:editingasurvey'] = 'Umfrage bearbeiten';
$string['privacy:metadata'] = 'Survey Tracker mod does not store data itself.';
$string['surveyrunning'] = 'Es läuft bereits eine Umfrage';
$string['surveysolved'] = 'Umfrage wurde erfolgreich abgeschlossen';
$string['surveysolvedearlier'] = 'Umfrage wurde schon einmal abgeschlossen';

$string['modulevisibility'] = 'Modulsichtbarkeit';
$string['visibility'] = 'Sichtbarkeit';
$string['surveytrackerinfo:global'] = 'Global';
$string['surveytrackerinfo:moduleonly'] = 'Nur für diesen Kurs';

$string['table:survey'] = 'Umfrage';
$string['table:points'] = 'Punkte';
$string['table:expires'] = 'Läuft ab am';
$string['table:add'] = 'Umfrage hinzufügen';
$string['table:edit'] = 'bearbeiten';
$string['table:participants'] = 'Teilnehmer';
$string['table:clicktocopy'] = 'zum kopieren klicken';
$string['table:copied'] = 'kopiert';
$string['table:firstname'] = 'Vorname';
$string['table:lastname'] = 'Nachname';
$string['table:amount'] = 'Anzahl';
$string['table:surveys'] = 'erstellte Umfragen';
$string['table:surveyparticipations'] = 'Teilnahmen';
$string['table:surveyparticipationspoints'] = 'verteilte Punkte';
$string['table:contestant'] = 'eigene Teilnahmen';
$string['table:contestantcount'] = 'Teilnahmen';
$string['table:contestantpoints'] = 'erhaltene Punkte';


$string['edit:surveyurl'] = 'Link zur Umfrage';
$string['edit:subject'] = 'Titel';
$string['edit:description'] = 'Beschreibung';
$string['edit:expiry'] = 'Ablaufdatum und -zeit';
$string['edit:points'] = 'Punkte';
$string['surveyedited'] = 'Umfrage wurde bearbeitet';
$string['surveyadded'] = 'Umfrage wurde hinzugefügt';
