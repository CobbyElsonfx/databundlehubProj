<?php
require_once 'vendor/autoload.php';
require_once 'app/classes/Post.php';

use App\classes\Post;
use App\classes\Site;

$ob = Site::display();
$siteData = mysqli_fetch_assoc($ob);
#$post = Post::showActivelPost();
$populer = Post::showPopulerlPost();
$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);
$title = '';
if ($page == 'login.php') {
    $title = 'Home';
} elseif ($page == 'contact.php') {
    $title = 'Contact';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title><?= $title . ' | ' . $siteData['title'] ?></title>
    <meta name="keywords"
        content="data bundles, affordable data, mobile data, internet data, data plans, data sellers, Ghana data bundles">
    <meta name="description"
        content="Get affordable data bundles from dataBundleshub, your trusted data seller in Ghana. We offer a range of mobile data plans to suit your needs.">
    <meta name="author" content="dataBundleshub">

    <meta name="google-adsense-account" content="ca-pub-1983131452016590">




    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="assets/css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="assets/css/version/tech.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Macondo&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">

</head>

<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse py-3 mt-4 mx-3 fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="uploads/<?= $siteData['logo'] ?>" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Data Bundle
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="databundle.php">Buy Data Bundle</a>
                                    <a class="dropdown-item" href="order-status.php">Check Order Status</a>
                                    <a class="dropdown-item disabled" href="#">Register as Agent</a>

                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="news.php">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">About Us </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <form class="form-inline" method="get">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search  "
                                    aria-label="Search" name="search">
                                <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search"
                                    style="cursor: pointer;" name="search-btn">
                            </form>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
        <hr>
        <section class="section">
          