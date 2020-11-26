<?php
// // HTTP
// define('HTTP_SERVER', 'http://localhost/ShopHoa/tt_madison_quickstart/');
// //sua
// // HTTPS
// define('HTTPS_SERVER', 'http://localhost/ShopHoa/tt_madison_quickstart/');
// //sua
// // DIR
// define('DIR_APPLICATION', 'C:/xampp/htdocs/ShopHoa/tt_madison_quickstart/catalog/');

// define('DIR_SYSTEM', 'C:/xampp/htdocs/ShopHoa/tt_madison_quickstart/system/');
// define('DIR_IMAGE', 'C:/xampp/htdocs/ShopHoa/tt_madison_quickstart/image/');
//sua


// HTTP
define('HTTP_SERVER', 'https://bffkantho.herokuapp.com/');
//sua
// HTTPS
define('HTTPS_SERVER', 'https://bffkantho.herokuapp.com/');
//sua
// DIR
define('DIR_APPLICATION', 'https://bffkantho.herokuapp.com/catalog/');

define('DIR_SYSTEM', 'https://bffkantho.herokuapp.com/system/');
define('DIR_IMAGE', 'https://bffkantho.herokuapp.com/image/');

define('DIR_STORAGE', 'https://bffkantho.herokuapp.com/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
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
define('DB_PASSWORD', '');
define('DB_DATABASE', 'shophoa');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');