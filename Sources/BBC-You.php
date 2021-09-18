<?php

/**
 * @package BBC You
 * @version 2.2
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2021, Diego Andrés
 * @license https://www.mozilla.org/en-US/MPL/2.0/
 */

if (!defined('SMF'))
	die('No direct access...');

class BBCYou
{
	public static function bbc_code(&$codes)
	{
		global $user_info, $txt;

		$codes[] = [
				'tag' => 'you',
				'type' => 'closed',
				'content' => empty($user_info['is_guest']) && !empty($user_info['name']) ? $user_info['name'] : (!empty($txt[28]) ? $txt[28] : (!empty($txt['guest']) ? $txt['guest'] : 'Guest')),
		];
	}

	public static function settings(&$bbc_settings)
	{
		global $txt;

		// Load language
		loadLanguage('bbcyou/');

		$bbc_settings[] = [
			'check', 'bbc_you_setting', 'subtext' => $txt['bbc_you_setting_desc']
		];
	}

	public static function button(&$tags)
	{
		global $txt, $modSettings;

		// Check if it's enabled
		if (empty($modSettings['bbc_you_setting']))
			return;

		// Load language
		loadLanguage('bbcyou/');

		// Add the button
		$tags[][] = [
			'image' => 'you',
			'code' => 'you',
			'before' => '[you]',
			'description' => $txt['bbc_you']
		];
	}
}