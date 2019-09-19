<?php

// Connect to DB
function getConnection() {
    $dbhost="127.0.0.1";
    $dbuser="yudy";
    $dbpass="clave";
    $dbname="yuraniBD";
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

?>