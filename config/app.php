<?php

/**
 * Defining project root
 * leave '/' if there is no subfolder involved
 * URL Example: http://localhost/works/blog
 * Trailing slash is required in the PROJECT_ROOT
 */
define('PROJECT_ROOT', '/works/blog/');

/**
 * Defining admin project root
 * leave '/' if there is no subfolder involved
 * Trailing slash is required in the ADMIN_PROJECT_ROOT
 */
define('ADMIN_PROJECT_ROOT', '/works/blog/admin/');

/**
 * Defining admin templates path
 * Trailing slash is required in the ADMIN_TEMPLATES_PATH
 */
define('ADMIN_TEMPLATES_PATH', ADMIN_PROJECT_ROOT . 'templates/');

/**
 * MYSQL CREDENTIALS
 */
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'blog');

/**
 * DEFAULT TIMEZONE
 */
date_default_timezone_set('Asia/Kolkata'); 

/**
 * SITE CONSTANTS
 */
define('BASEURL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . PROJECT_ROOT);
define('ADMIN_BASEURL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ADMIN_PROJECT_ROOT);
define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . PROJECT_ROOT);
define('ADMIN_TEMPLATES', $_SERVER['DOCUMENT_ROOT'] . ADMIN_TEMPLATES_PATH);

/**
 * SESSION START
 */
session_start();