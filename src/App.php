<?php

namespace App;

use App\controllers\HomeController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class App
{
    public function __construct()
    {
        $home = new HomeController();
        echo 'App source' . '</br>';
        $mnail = new PHPMailer();
    }
}
