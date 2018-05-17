<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Foodtruck BeWeB</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.0/css/fork-awesome.min.css" integrity="sha256-sX8HLspqYoXVPetzJRE4wPhIhDBu2NB0kYpufzkQSms=" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
  </head>

  <body>

    <div class="container blogg">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <?php
              if($_SESSION){
                $username = $_SESSION["username"];
                echo "<a class=\"btn btn-sm btn-outline-success\" href=\"/deco\">$username</a>";

                if($_SESSION["is_admin"] == 1){
                  echo "<a class=\"btn btn-sm btn-outline-danger\" href=\"/admin\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> Administration</a>";
                }

              }else{
                echo "<a class=\"btn btn-sm btn-outline-success\" href=\"/login\">Login</a>";
              }
            ?>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/"><i class="fa fa-truck" aria-hidden="true"></i> Foodtruck BeWeB</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/qsn">Qui sommes-nous</a>
          <a class="p-2 text-muted" href="/cartes">Les menus</a>
          <a class="p-2 text-danger" href="/">Où nous trouver</a>
          <a class="p-2 text-muted" href="/lo">Livre d'or</a>          
          <a class="p-2 text-muted" href="/contact">Contact</a>
        </nav>
      </div>
