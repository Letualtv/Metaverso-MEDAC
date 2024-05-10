<?php

require('captcha.php');

$captcha = new Captcha();

if ($captcha->checkCaptcha($_POST['h-captcha-response'])) {
    echo "Subscribir " . $_POST['email'];
} else {
    echo "Captcha incorrecto";
}