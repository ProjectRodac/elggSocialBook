<?php
/**
 * Responsive Elgg theme [Landing]
 * @author RiverVanRain
 * @package L1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) wZm 2k15
 * @link http://wzm.me
**/

elgg_register_event_handler('init','system','l1_init');

function l1_init() {
	elgg_register_plugin_hook_handler('head', 'page', 'l1_setup_head');
	elgg_register_plugin_hook_handler('index', 'system', 'l1_index_handler');
	elgg_register_page_handler('thanks', 'l1_thanks_handler');
	elgg_register_page_handler('wrong', 'l1_wrong_handler');
	
	$root = dirname(__FILE__);
	$action_path = "$root/actions";
	elgg_register_action('contact', "$action_path/contact.php", 'public');
}

function l1_setup_head($hook, $type, $return, $params) {

    if (empty($params['title'])) {
		$return['title'] = elgg_get_config('sitename');
	} else {
		$return['title'] = $params['title'] . ' :: ' . elgg_get_config('sitename');
	}
	
	$return['metas'] = false;
	
	$return['metas']['description'] = array(
		'name' => 'description',
		'content' => elgg_get_config('sitedescription')
	);
	
	$return['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

    $return['metas'][] = array(
        'name' => 'mobile-web-app-capable',
        'content' => 'yes',
    );

    $return['metas'][] = array(
        'name' => 'apple-mobile-web-app-capable',
        'content' => 'yes',
    );
	
	$return['links']['manifest'] = array(
		'rel' => 'manifest',
		'href' => elgg_normalize_url('/manifest.json'),
	);

	return $return;
}

function l1_index_handler() {
    require_once dirname(__FILE__) . '/pages/index.php';
	return true;
}

function l1_thanks_handler() {
	require_once dirname(__FILE__) . '/pages/thanks.php';
	return true;
}

function l1_wrong_handler() {
	require_once dirname(__FILE__) . '/pages/wrong.php';
	return true;
}