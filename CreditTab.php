<?php
/** 
* @addtogroup Extensions 
*/
// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'CreditTab',
	'author' => '[http://www.dasch-tour.de DaSch]',
	'version' =>  '1.5.0',
	'descriptionmsg' => 'credits-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:CreditTab',
);

$dir = dirname( __FILE__ ) . '/';

// Internationalization
$wgExtensionMessagesFiles['CreditTab'] = $dir . 'CreditTab.i18n.php';

$wgAutoloadClasses['CreditTabHooks'] = $dir . 'CreditTab.hooks.php';

$wgHooks['BeforePageDisplay'][] = 'CreditTabHooks::addAuthorHeadLink';
$wgHooks['SkinTemplateNavigation'][] = 'CreditTabHooks::displayTab';
