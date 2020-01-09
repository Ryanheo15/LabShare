<?php

/* ---- Variables ---- */
// Set Admin email (ENTRY MUST EXIST IN DATABASE)
$admin_email = "admin@labshare.net";

/* ---- Functions ---- */
// Encryption function
function encrypt($pass) {
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;

    return crypt($pass, $hashF_and_salt);
}

/* ---- Tasks ---- */
// Establishing SQL Database connection
include 'db_connection.php';

?>
