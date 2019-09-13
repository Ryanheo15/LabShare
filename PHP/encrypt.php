<?php
    include 'db_connection.php';

    echo
    "<form method='get'>
        <input type='text' name='text'>
        <input type='submit'>
    </form>";

    echo "Encrypted text:<br>";

    if (!isset($_GET['text'])) {
        $_GET['text'] = '';
    }
    echo encrypt($_GET['text']);
?>
