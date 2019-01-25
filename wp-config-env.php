<?php
/**
 * Wp-config file that defines it's constants from variables set in .env.
 *
 * @see https://docs.wpdrydock.com/environment-variables/environment
 */
define('ENVIRONMENT', getenv('ENVIRONMENT' ?: 'development'));

// Plugin & Content Directories.
define('WP_CONTENT_URL', getenv('WP_CONTENT_URL') ?: 'http://localhost/lib');
define('WP_CONTENT_DIR', getenv('WP_CONTENT_DIR') ?: '/var/www/html/app/lib');
define('WP_HOME', getenv('WP_HOME') ?: 'http://localhost');
define('WP_SITEURL', getenv('WP_SITEURL') ?: 'http://localhost/core');

// Database.
define('DB_NAME', getenv('DB_NAME' ?: 'default'));
define('DB_HOST', getenv('DB_HOST' ?: 'localhost'));
define('DB_USER', getenv('DB_USERNAME' ?: 'default'));
define('DB_PASSWORD', getenv('DB_PASSWORD' ?: 'secret'));
define('DB_CHARSET', getenv('DB_CHARSET' ?: 'utf8mb4'));
define('DB_COLLATE', '');
$table_prefix = getenv('TABLE_PREFIX' ?: 'wp_');

// Core.
define('AUTO_UPDATE_CORE', getenv('AUTO_UPDATE_CORE' ?: 'false'));
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT' ?: 'false'));

if (getenv('FS_METHOD')) :
    define('FS_METHOD', getenv('FS_METHOD'));
endif;

// Customizer.
define('ENABLE_CUSTOMIZER_SITE_ID_ADDITIONS', getenv('ENABLE_CUSTOMIZER_SITE_ID_ADDITIONS') ?: 'false');
define('ENABLE_CUSTOMIZER_ANALYTICS', getenv('ENABLE_CUSTOMIZER_ANALYTICS') ?: 'false');

// Dashboard.
define('REMOVE_DEFAULT_DASHBOARD_META', getenv('REMOVE_DEFAULT_DASHBOARD_META' ?: 'false'));
define('REMOVE_POSTS_MENU', getenv('REMOVE_POSTS_MENU' ?: 'false'));
define('REMOVE_MEDIA_MENU', getenv('REMOVE_MEDIA_MENU' ?: 'false'));
define('REMOVE_PAGES_MENU', getenv('REMOVE_PAGES_MENU' ?: 'false'));
define('REMOVE_COMMENTS_MENU', getenv('REMOVE_COMMENTS_MENU' ?: 'false'));
define('REMOVE_APPEARANCE_MENU', getenv('REMOVE_APPEARANCE_MENU' ?: 'false'));
define('REMOVE_PLUGINS_MENU', getenv('REMOVE_PLUGINS_MENU' ?: 'false'));
define('REMOVE_USERS_MENU', getenv('REMOVE_USERS_MENU' ?: 'false'));
define('REMOVE_TOOLS_MENU', getenv('REMOVE_TOOLS_MENU' ?: 'false'));
define('REMOVE_SETTINGS_MENU', getenv('REMOVE_SETTINGS_MENU' ?: 'false'));

// Support Widget.
define('ENABLE_SUPPORT_WIDGET', getenv('ENABLE_SUPPORT_WIDGET' ?: 'false'));
define('SW_DEVELOPER_NAME', getenv('SW_DEVELOPER_NAME' ?: ''));
define('SW_DEVELOPER_EMAIL', getenv('SW_DEVELOPER_EMAIL' ?: ''));
define('SW_DEVELOPER_PHONE', getenv('SW_DEVELOPER_PHONE' ?: ''));

// ACF.
define('ENABLE_ACF', getenv('ENABLE_ACF') ?: 'false');
define('REMOVE_ACF_MENU', getenv('REMOVE_ACF_MENU') ?: 'false');

// Admin Bar.
define('SHOW_ADMIN_BAR', getenv('SHOW_ADMIN_BAR' ?: 'true'));

// Salts.
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// Client Slug (Depreciated).
define('CLIENT_SLUG', getenv('CLIENT_SLUG' ?: 'wpdd'));

/**
 * Allow debug tools if:
 * ENVIRONMENT = development & DEBUG_ACTIVE = true
 * or:
 * ENVIRONMENT = production & DEBUG_ACTIVE = true & DEBUG_FORCE = iKnowWhatImDoing
 */
if ((
        ENVIRONMENT === 'development' &&
        getenv('DEBUG_ACTIVE') === 'true'
    )||(
        ENVIRONMENT === 'production' &&
        getenv('DEBUG_ACTIVE') === 'true' &&
        getenv('DEBUG_FORCE') === 'iKnowWhatImDoing'
    )
) :
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', true);
    @ini_set('display_errors', 1);
    define('ENABLE_DEBUG_BAR', getenv('ENABLE_DEBUG_BAR') ?: 'false');
    define('ENABLE_QUERY_MONITOR', getenv('ENABLE_QUERY_MONITOR') ?: 'false');
else :
    define('WP_DEBUG', false);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors', 0);
    define('ENABLE_DEBUG_BAR', 'false');
    define('ENABLE_QUERY_MONITOR', 'false');
endif;

// Disable cron, more info in .env & docs.
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON') ?: 'false');
