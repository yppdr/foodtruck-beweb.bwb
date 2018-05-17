<?php

if (file_exists('pages/' . (isset($_GET['p']) ? $_GET['p'] : 'home') . '.php') || !preg_match("#^[a-zA-Z0-9\-\_\/]+$#", isset($_GET['p']))) {
    include('pages/' . (isset($_GET['p']) ? $_GET['p'] : 'home') . '.php');
} else {

    $_GET['p'] = "404";
    include('pages/' . (isset($_GET['p']) ? $_GET['p'] : $_GET['p']) . '.php');
} 

