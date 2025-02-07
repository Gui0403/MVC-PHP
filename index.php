<?php

require __DIR__."/vendor/autoload.php";

use \App\Controller\Pages\Home;

$home = new Home();

echo Home::getHome();
