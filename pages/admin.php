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
        <div class="card">
        <div class="card-header">
            Users 
        </div>
        <div class="card-body">
            
        </div>
        </div>
    </div>
<pre>
<?php

echo count(get_users());

foreach(get_users() as $v){
    echo $v["username"] . "\n";
}

?>
</pre>


</div>



        </div>
      </div>