<?php
/**
*
* @package phpBB Extension - Cookie Settings
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.muziekpromo.net> 
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP entries
	'ACP_COOKIE_PALETTE_BACKGROUND'				=> 'Kleur van de achtergrond instellen',
	'ACP_COOKIE_PALETTE_BACKGROUND_EXPLAIN'		=> 'Verander de kleur van de achtergrond door op de waarde te klikken.',
	'ACP_COOKIE_BUTTON_BACKGROUND'				=> 'Stel de kleur in van de knop',
	'ACP_COOKIE_BUTTON_BACKGROUND_EXPLAIN'		=> 'Verander de kleur van de knop door op de waarde te klikken.',
	'ACP_COOKIE_MESSAGE'						=> 'Stel bericht in voor cookie',
	'ACP_COOKIE_MESSAGE_EXPLAIN'				=> 'Wijzig berichttekst voor cookie.',
	'ACP_COOKIE_DISMISS'						=> 'Stel knoptekst in voor cookie',
	'ACP_COOKIE_DISMISS_EXPLAIN'				=> 'Wijzig knoptekst voor cookie.',
	'ACP_COOKIE_USE_LINK'						=> 'Gebruik link in Cookie',
	'ACP_COOKIE_USE_LINK_EXPLAIN'				=> 'Gebruik "Leer meer" link in cookie.',
	'ACP_COOKIE_CONSENT_INFO'					=> 'Stel tekst in voor URL',
	'ACP_COOKIE_CONSENT_INFO_EXPLAIN'			=> 'Wijzig tekst voor de url link.',
	'ACP_COOKIE_CONSENT_HREF'					=> 'Stel URL link in',
	'ACP_COOKIE_CONSENT_HREF_EXPLAIN'			=> 'Wijzig URL link.',
));
