<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}
############################ Parsoid #############################
$wgVirtualRestConfig['modules']['parsoid'] = array(
	// URL to the Parsoid instance
	// Use port 8142 if you use the Debian package
	'url' => 'http://parsoid:8000',
	// Parsoid "domain", see below (optional)
	'domain' => 'web_en'
);

####################### Datastd extensions ########################
##### IframePage
require_once "$IP/extensions/IframePage/IframePage.php";
$wgIframePageSrc= array( 'Wiki' => 'https://ru.wikipedia.org/wiki' );
$wgIframePageAllowPath = false;

##### Google Analytics Integration
/*
require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
// Replace xxxxxxx-x with YOUR GoogleAnalytics UA number
$wgGoogleAnalyticsAccount = 'UA-xxxxxxx-x'; 
// Add HTML code for any additional web analytics (can be used alone or with $wgGoogleAnalyticsAccount)
$wgGoogleAnalyticsOtherCode = '<script type="text/javascript" src="https://analytics.example.com/tracking.js"></script>';

// Optional configuration (for defaults see googleAnalytics.php)
// Store full IP address in Google Universal Analytics (see https://support.google.com/analytics/answer/2763052?hl=en for details)
$wgGoogleAnalyticsAnonymizeIP = false; 
// Array with NUMERIC namespace IDs where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreNsIDs = array(500);
// Array with page names (see magic word Extension:Google Analytics Integration) where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnorePages = array('ArticleX', 'Foo:Bar');
// Array with special pages where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreSpecials = array( 'Userlogin', 'Userlogout', 'Preferences', 'ChangePassword', 'OATH');
// Use 'noanalytics' permission to exclude specific user groups from web analytics, e.g.
$wgGroupPermissions['sysop']['noanalytics'] = true;
$wgGroupPermissions['bot']['noanalytics'] = true;
// To exclude all logged in users give 'noanalytics' permission to 'user' group, i.e.
$wgGroupPermissions['user']['noanalytics'] = true;
*/

##### Yandex.Metrika counter
$wgHooks['BeforePageDisplay'][] = function ( $out ) {
   $out->addScript(
'<!-- Yandex.Metrika counter -->

<!-- ====== Insert the script instead of this comment ====== -->

<!-- /Yandex.Metrika counter -->'
    );
};

$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
