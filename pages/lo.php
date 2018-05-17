<?php

include './fun/public.php';

if($_POST){
    var_dump($_POST);
    $username = $_SESSION["username"];
    $content = $_POST["content"];
    add_lo($username, $content);
}

?><div class="container">
    <div class="col blog-main">
            <h1 class="pb-3 mb-4 border-bottom">Livre d'or </h1>
        

<?php

if ($_SESSION) {
    ?>

    <div class="col p-3">
        <div class="card text-center ">
                <div class="card-header">
                   Add un truc poto !
                </div>
                <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="content">Genre la :D</label>
                        <input type="text" class="form-control" id="content" name="content" placeholder="Ici la !">
                    </div>
                    <button type="submit" name="sendnudes" id="sendnudes"  class="btn btn-primary" >Submit</button>
                </form>
                </div>
                
        </div>

    </div>

    <?php
}else{
    ?>
<div class="alert alert-primary" role="alert">
  Tu doit etre co pour add un truc poto !
</div>
    <?php
}



foreach (get_lo('ORDER BY id DESC') as $key ) {

    ?>

    <div class="col p-3">
        <div class="card text-center " id="<?= $key["id"]; ?>">

                <div class="card-header">
                    <?= $key["username"]; ?> <em> <?= $key["jesuisla"]; ?></em>
                </div>
                <div class="card-body">
                    <p><?= $key["content"]; ?></p>
                </div>
                
        </div>

    </div>

        <?php
}

?>


    </div>
</div>