<?php

/**
 * @package BBC You
 * @version 2.0
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2015, Diego Andrés
 * @license http://www.mozilla.org/MPL/MPL-1.1.html
 */

if (!defined('SMF'))
	die('No direct access...');

class BBCYou
{
	public static function bbc_code(&$codes)
	{
		global $user_info, $txt;

		$codes[] = array(
				'tag' => 'you',
				'type' => 'closed',
				'content' => empty($user_info['is_guest']) && !empty($user_info['name']) ? $user_info['name'] : (!empty($txt[28]) ? $txt[28] : (!empty($txt['guest']) ? $txt['guest'] : 'Guest')),
		);

	}
}