<?php

define( 'GD_VIP', '50.62.198.70' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', '6920ca4af234a038af83f3489fbbda8b' );
define( 'GD_STAGING_SITE', true );
define( 'GD_EASY_MODE', false );
define( 'GD_SITE_CREATED', 1481106371 );
define( 'REDIS_SOCKET', '/var/run/RedisProxy/mwprp.sock' );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( '04fcbf1d-758f-49ef-a7f1-e28305c9e0d5;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}