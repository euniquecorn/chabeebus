<?php

/* database variables */
define('DB_TYPE', 'mysql');
define('DB_NAME', 'chabeebus');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

define('DEBUG', true);

if (DEBUG) {
    ini_set("display_error", 1);
} else {
    ini_set("display_error", 0);
}
