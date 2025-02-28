<?php
/**
 * @package    Grav\Core
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

// Some standard defines
define('GRAV', true);
define('GRAV_VERSION', '1.7.1');
define('GRAV_SCHEMA', '1.7.0_2020-11-20_1');
define('GRAV_TESTING', false);

// PHP minimum requirement
if (!defined('GRAV_PHP_MIN')) {
    define('GRAV_PHP_MIN', '7.3.6');
}

// Directory separator
if (!defined('DS')) {
    define('DS', '/');
}

// Directories and Paths
if (!defined('GRAV_ROOT')) {
    $path = rtrim(str_replace(DIRECTORY_SEPARATOR, DS, getenv('GRAV_ROOT') ?: getcwd()), DS);
    define('GRAV_ROOT', $path);
}
if (!defined('GRAV_USER_PATH')) {
    $path = rtrim(getenv('GRAV_USER_PATH') ?: 'user', DS);
    define('GRAV_USER_PATH', $path);
}
if (!defined('GRAV_CACHE_PATH')) {
    $path = rtrim(getenv('GRAV_CACHE_PATH') ?: 'cache', DS);
    define('GRAV_CACHE_PATH', $path);
}
if (!defined('GRAV_LOG_PATH')) {
    $path = rtrim(getenv('GRAV_LOG_PATH') ?: 'logs', DS);
    define('GRAV_LOG_PATH', $path);
}
if (!defined('GRAV_TMP_PATH')) {
    $path = rtrim(getenv('GRAV_TMP_PATH') ?: 'tmp', DS);
    define('GRAV_TMP_PATH', $path);
}
if (!defined('GRAV_BACKUP_PATH')) {
    $path = rtrim(getenv('GRAV_BACKUP_PATH') ?: 'backup', DS);
    define('GRAV_BACKUP_PATH', $path);
}
unset($path);

define('USER_PATH', GRAV_USER_PATH . DS);
define('CACHE_PATH', GRAV_CACHE_PATH . DS);
define('ROOT_DIR', GRAV_ROOT . DS);
define('USER_DIR', ROOT_DIR . USER_PATH);
define('CACHE_DIR', ROOT_DIR . CACHE_PATH);

// DEPRECATED: Do not use!
define('ASSETS_DIR', ROOT_DIR . 'assets/');
define('IMAGES_DIR', ROOT_DIR . 'images/');
define('ACCOUNTS_DIR', USER_DIR .'accounts/');
define('PAGES_DIR', USER_DIR .'pages/');
define('DATA_DIR', USER_DIR .'data/');
define('SYSTEM_DIR', ROOT_DIR .'system/');
define('LIB_DIR', SYSTEM_DIR .'src/');
define('PLUGINS_DIR', USER_DIR .'plugins/');
define('THEMES_DIR', USER_DIR .'themes/');
define('VENDOR_DIR', ROOT_DIR .'vendor/');
define('LOG_DIR', ROOT_DIR . GRAV_LOG_PATH . DS);
// END DEPRECATED

// Some extensions
define('CONTENT_EXT', '.md');
define('TEMPLATE_EXT', '.html.twig');
define('TWIG_EXT', '.twig');
define('PLUGIN_EXT', '.php');
define('YAML_EXT', '.yaml');

// Content types
define('RAW_CONTENT', 1);
define('TWIG_CONTENT', 2);
define('TWIG_CONTENT_LIST', 3);
define('TWIG_TEMPLATES', 4);
