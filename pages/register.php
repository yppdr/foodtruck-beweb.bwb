<?php

require 'lib/password.php';

include './fun/config.php';
 


if(isset($_POST['register'])){

    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $dbh->prepare($sql);
    

    $stmt->bindValue(':username', $username);
    

    $stmt->execute();
    

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($row['num'] > 0){
        die('That username already exists!');
    }
    
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $dbh->prepare($sql);
   
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);

    $result = $stmt->execute();
    if($result){
        header('Location: http://foodtruck-beweb.bwb/login');
            exit;;
    }
    
}


?>

<form action="http://foodtruck-beweb.bwb/register" method="post">


            <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control"  id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
            </form>
</form>
    </div>
</div>