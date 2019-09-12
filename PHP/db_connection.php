<?php
//Make sure to INCLUDE this file when accessing mysql databases

//Creating an array for database connection
$db["db_host"] = "localhost";
$db["db_username"] = "openglaz_LSAdmin";
$db["db_pass"] = "ryanheo";
$db["db_name"] = "openglaz_labshare";

//Converting array values into constants --> more security
foreach ($db as $key => $value) {
    //Setting up constants
    define(strtoupper($key), $value);
}
//Setting up php connection
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

if (!$connection) {
    die("Connection failed <br>" . mysql_error());
}
else {
    echo "Connected";
}
?>
