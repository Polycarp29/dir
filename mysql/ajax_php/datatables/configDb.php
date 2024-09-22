<?php

define('SEVERNAME', 'localhost');
define('DB_UNAME', 'root');
define('DB_PASS', '');
define('DB_NAME', 'employee');


$DBconnect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($DBconnect);

if (!$DBconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
