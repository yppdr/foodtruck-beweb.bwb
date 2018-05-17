<?php



function get_users(){
    include 'config.php';
    $sql = "SELECT id, username, is_admin FROM users";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetchAll();

    return $user;

}

function get_lo(){
    include 'config.php';
    $sql = "SELECT * FROM lo";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $lo = $stmt->fetchAll();

    return $lo;

}