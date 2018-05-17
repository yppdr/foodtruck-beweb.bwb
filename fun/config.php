<?php

/**
 * PDO IS BAE
 */

$user = "kiwi";
$pass = "aze";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=resto', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
