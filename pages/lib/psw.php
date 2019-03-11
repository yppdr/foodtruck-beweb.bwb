<?php

function hash_me($password){
    $secret = password_hash($password, PASSWORD_BCRYPT);
    return $secret;
}

function verify_me($pass_cl, $password_hash){
  
    hash_me($pass_cl);

    if (password_verify($pass_cl, $password_hash))
    { 
        return true;
    }
    else
    {
        return false;
    }

}
