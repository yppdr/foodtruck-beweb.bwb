<?php
$user = "kiwi";
$pass = "aze";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=resto', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

function debug($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}