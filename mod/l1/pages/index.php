<?php
/**
 * Responsive Elgg theme [Landing]
 * @author RiverVanRain
 * @package L1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) wZm 2k15
 * @link http://wzm.me
**/
elgg_set_context('main');

if (elgg_is_logged_in()) {
	forward('/activity');
}

echo elgg_view_page(null, null,'main');