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
 * Survey Tracker overview block.
 *
 * @package    block_surveytrackerinfo
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net/)
 * @author     FHGR - Marc-Alexander Iten
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/** @var stdClass $plugin */

$plugin->version   = 2022083101;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2021052300;        // Requires this Moodle version.
$plugin->component = 'block_surveytrackerinfo';
$plugin->dependencies = array('mod_surveytracker' => 2022083100);
