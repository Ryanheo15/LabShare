<?php
//Make sure to INCLUDE this file when accessing mysql databases

//Creating an array for database connection
/*
$db["db_host"] = "localhost";
$db["db_username"] = "openglaz_LSAdmin";
$db["db_pass"] = "ryanheo";
$db["db_name"] = "openglaz_labshare";
*/

//Localhost database for testing purposes
$db["db_host"] = "localhost";
$db["db_username"] = "root";
$db["db_pass"] = "";
$db["db_name"] = "lab_share";

//Set Admin email (ENTRY MUST EXIST IN DATABASE)
$admin_email = "admin@labshare.net";

//Encryption function
function encrypt($pass) {
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;

    return crypt($pass, $hashF_and_salt);
}

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
    echo "<script> console.log('SQL Database Successfully Connected') </script>\n";
}

?>
