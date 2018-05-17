<?php

if($_SESSION["is_admin"] !== "1"){
    header('Location: http://foodtruck-beweb.bwb/');
    exit;
}


include './fun/admin.php';

?>

<div class="container">
<div class="col blog-main">
          <h1 class="pb-3 mb-4 border-bottom"><i class="fa fa-gavel" aria-hidden="true"></i> Administration </h1>
<div class="row">


    <div class="col-md-4">
        <div class="card text-center">
        <div class="card-header">
            Users 
        </div>
        <div class="card-body">
            <h3><?= count(get_users()); ?></h3>
        </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
        <div class="card-header">
            Post sur le sleeping book 
        </div>
        <div class="card-body">
            <h3><?= count(get_lo()); ?></h3>
        </div>
        </div>
    </div> 

    <div class="col-md-4">
        <div class="card text-center">
        <div class="card-header">
            Api req 
        </div>
        <div class="card-body">
            <h3>6969 req</h3>
        </div>
        </div>
    </div> 

        <div class="col p-3">
            <div class="card text-center ">
                <div class="card-header">
                    Geoloc mon foodtruck
                </div>
                <div class="card-body">
                    <button class="btn btn-block btn-info">Go !</button>
                </div>
                </div>
            </div>

        </div>



        </div>
      </div>