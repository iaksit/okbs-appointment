<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?= base_url("uploads/app/" . get_option("app_ico")) ?>"/>
    <title><?= get_option("app_name"); ?> | Sayfa Bulunamadı</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="<?= cms_theme_assets_folder("plugins/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= cms_theme_assets_folder("css/AdminLTE.min.css") ?>">
    <link rel="stylesheet" href="<?= cms_theme_assets_folder("css/under.css") ?>">

</head>
<body>
<div class="login-box" style="width: 70%!important;">

    <div class="login-box-body">
        <div class="login-logo">
            <img style="width: 30%!important;height: 30%!important;" src="<?= cms_theme_assets_folder("img/404.gif"); ?>" alt="">
        </div>

        <h3 class="text-center">Aradığınız Sayfa bulunamadı</h3>
        <h4 class="text-center">Ana Sayfaya gitmek için <a href="<?= base_url()?>">tıklayınız</a></h4>
    </div>

</div>


</body>
</html>



