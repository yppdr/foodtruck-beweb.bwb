<?php


session_start();

/*
if($_POST['username']){
    $_SESSION["username"] = $_POST["username"];
    header('Location: http://moi.bwb/je-suis-creatif/');
}else{
    session_destroy();
    header('Location: http://moi.bwb/je-suis-creatif/login');
}*/


require 'lib/password.php';
 
require 'co.php';


if(isset($_POST['login'])){
    
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    

    $sql = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $dbh->prepare($sql);
    

    $stmt->bindValue(':username', $username);
    

    $stmt->execute();
    
  
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
   
    if($user === false){
        
        $_SESSION['flash'] = 'Combinaison nom d\'utilisateur / mot de passe incorrecte!';
    } else{
    
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        if($validPassword){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = time();

            $cookie_name = "username";
            $cookie_value = $user['username'];
            setcookie($cookie_name, $cookie_value, time()+3600, "/"); // 86400 = 1 day

            //$value = $user['username'];
            //setcookie("username", $value, time()+3600); 
            
            header('Location: http://foodtruck-beweb.bwb/');
            exit;
            
        } else{
    
            header('Location: http://foodtruck-beweb.bwb/login');
            exit;
        }
    }
    
}
 
