<?php

function get_lo($arg){
    include 'config.php';
    $sql = "SELECT * FROM lo $arg";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $lo = $stmt->fetchAll();

    return $lo;

}