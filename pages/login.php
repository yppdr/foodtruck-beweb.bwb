
<?php


session_start();



require 'lib/password.php';

include './fun/config.php';;


if(isset($_POST['login'])){
    
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    

    $sql = "SELECT id, username, password, is_admin FROM users WHERE username = :username";
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
            $_SESSION['is_admin'] = $user['is_admin'];
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
    
}?>
<div class="site-content">
    <div class="container">
    <h1>LOGIN</h1>
<?= $_SESSION["flash"] ;
session_destroy();
?>

        <form action="" method="post">
            <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control"  id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>