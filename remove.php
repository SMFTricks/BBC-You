<?php

/**
 * @package BBC You
 * @version 2.0
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2015, Diego Andrés
 * @license http://www.mozilla.org/MPL/MPL-1.1.html
 */
 
	if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
		require_once(dirname(__FILE__) . '/SSI.php');

	elseif (!defined('SMF'))
		exit('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

	// So... looking for something new
	$hooks = array(
		'integrate_pre_include' => '$sourcedir/BBC-You.php',
		'integrate_bbc_codes' => 'BBCYou::bbc_code',
	);

	foreach ($hooks as $hook => $function)
		remove_integration_function($hook, $function);