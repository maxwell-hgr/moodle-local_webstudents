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
 * Webstudents admin settings and defaults.
 *
 * @package   local_webstudents
 * @copyright 2025 Maxwell Souza <maxwell.hygor01@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $ADMIN->add('users', new admin_externalpage(
        'local_webstudents',
        get_string('pluginname', 'local_webstudents'),
        new moodle_url('/local/webstudents/index.php')
    ));

    $settings = new admin_settingpage('local_webstudents_settings', get_string('pluginname', 'local_webstudents'));

    $settings->add(new admin_setting_configtext(
        'local_webstudents/endpoint',
        get_string('endpoint', 'local_webstudents'),
        get_string('endpoint_desc', 'local_webstudents'),
        '',
        PARAM_URL
    ));

    $ADMIN->add('localplugins', $settings);
}
