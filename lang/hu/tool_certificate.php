<?php
// This file is part of the tool_certificate plugin for Moodle - http://moodle.org/
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
 * Language strings for the certificate tool.
 *
 * @package    tool_certificate
 * @copyright  2013 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['codelength'] = 'Sorszám hossza';
$string['codelength_desc'] = 'A szám generálásakor a program annyi nullát ad a generált szám elé, hogy elérje a beállított hosszúságot.';
$string['pattern'] = 'Minta';
$string['pattern_desc'] = 'Megadhatja, hogy a generált sorozatszám hogyan jelenjen meg. Két változót lehet használni, az egyik az {year}, a másik a {serial}. Ezzel az opcióval egyedi sorozatszám formátumot lehet beállítani. Csak olyan karaktereket használjunk, ami fájlnévben is megengedett!';