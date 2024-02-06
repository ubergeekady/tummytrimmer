<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=srv984.hstgr.io;dbname=u367177779_fluffynmini', 'u367177779_fluffynmini', 'Fluffyn2023@');

if (isset($_COOKIE["userid"])) {
    $userid = $_COOKIE["userid"];
} else {
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $statement = $pdo->prepare("INSERT INTO `users` (`id`, `user_agent`) VALUES (NULL, '$agent');");
    $row = $statement->execute();
    $userid = $pdo->lastInsertId();
    setcookie("userid", $userid, time() + 900000, "/", "", 0);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KGZBBD6CZX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KGZBBD6CZX');
</script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google" content="notranslate">
    <title>
        <?php echo $page_title; ?>
    </title>

    <script defer src="temp.js"></script>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <!--start to header-->
        <header class="top-header fixed-top border-bottom d-flex align-items-center">
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
                <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav">
                    <a href=""><i class="bi bi-list"></i></a>
                </div>
                <div class="brand-name">
                    <h6 class="mb-0 fw-bold text-dark">
                        <?php echo $page_title; ?>
                    </h6>
                </div>
            </nav>
        </header>
        <!--end to header-->