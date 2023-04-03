<?php
require_once 'vendor/autoload.php';
use App\App;
use Carbon\Carbon;
printf("Now: %s",Carbon::now());
// use App\Demo;
// use Core\Input;
// use App\controllers\HomeController;
$app = new App();
// $demo = new Demo();
// $input = new Input();
// $homeController = new HomeController;