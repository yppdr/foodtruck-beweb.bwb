<?php

function get_lo($arg){
    include 'config.php';
    $sql = "SELECT * FROM lo $arg";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $lo = $stmt->fetchAll();

    return $lo;

}

function add_lo($username, $content){
    include 'config.php';
    $statement = $dbh->prepare("INSERT INTO lo(username, content, jesuisla)
    VALUES(:username, :content, :jesuisla)");
    $statement->execute(array(
    "username" =>  $username,
    "content" => $content,
    "jesuisla" => date("Y-m-d")

));

    header('Location: http://foodtruck-beweb.bwb/lo');
    exit;

}