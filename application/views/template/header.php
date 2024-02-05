<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pod Talk - Free Bootstrap 5 CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/owl.theme.default.min.css">

    <link href="<?= base_url();?>public/css/templatemo-pod-talk.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>public/font-awesome/css/font-awesome.min.css">

    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="<?= base_url(); ?>home">
            <img src="<?= base_url(); ?>images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
        </a>

        <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
            <div class="input-group input-group-lg">
                <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast"
                    aria-label="Search">

                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Listing Page</a></li>

                        <li><a class="dropdown-item" href="#">Detail Page</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <div class="ms-4">
                <a href="<?= base_url(); ?>login" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
            </div>
        </div>
    </div>
</nav>
<body style="background-color: #252525;">
