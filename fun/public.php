<?php

function get_lo(){
    include 'config.php';
    $sql = "SELECT * FROM lo";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $lo = $stmt->fetchAll();

    return $lo;

}