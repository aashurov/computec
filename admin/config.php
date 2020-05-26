<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/computec/admin/');
define('HTTP_CATALOG', 'http://localhost:8888/computec/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8888/computec/admin/');
define('HTTPS_CATALOG', 'http://localhost:8888/computec/');

// DIR
define('DIR_APPLICATION', '/Applications/MAMP/htdocs/computec/admin/');
define('DIR_SYSTEM', '/Applications/MAMP/htdocs/computec/system/');
define('DIR_IMAGE', '/Applications/MAMP/htdocs/computec/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/Applications/MAMP/htdocs/computec/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'computec');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
