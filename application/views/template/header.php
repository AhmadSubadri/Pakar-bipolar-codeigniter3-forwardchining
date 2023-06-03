<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->
<title><?php echo SITE_NAME . " - " . ucfirst($this->uri->segment(1)) . " " . ucfirst($this->uri->segment(2)) ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="<?= base_url(); ?>assets/images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Site CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="<?= base_url(); ?>assets/js/modernizer.js"></script>
<!-- [if lt IE 9] -->
</head>

<body class="clinic_version">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="<?= base_url(); ?>assets/images/loaders/heart-loading2.gif" alt="">
    </div>
    <header>
        <div class="header-top wow fadeIn">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <a class="navbar-brand" href="<?= base_url(''); ?>"><img class="img-responsive" src="<?= base_url(); ?>assets/images/logo_bantul_box.png"></a>
                            <h5><span style="font-weight: bold">SEKRETEARIAT PINILIH</span><br>Kadibeso, Kel. Argodadi, Kab. Bantul DI. Yogyakarta<br>Argodadi, Sedayu, Bantul</h5>
                        </div>
                    </div>
                </div>
                <div class="right-header col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="iconcont">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="<?= base_url(); ?>assets/images/1.jpg" alt="Los Angeles" style="width:100%;">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url(); ?>assets/images/2.jpg" alt="Chicago" style="width:100%;">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url(); ?>assets/images/3.jpg" alt="New york" style="width:100%;">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="<?php if ($this->uri->uri_string() == "") {
                                                echo "active";
                                            } ?>" href="<?= base_url(''); ?>">Home</a></li>
                            <li><a class="<?php if ($this->uri->uri_string() == "berita") {
                                                echo "active";
                                            } ?>" data-scroll href="<?= base_url('berita'); ?>">Berita</a></li>
                            <li><a class="<?php if ($this->uri->uri_string() == "periksa") {
                                                echo "active";
                                            } ?>" data-scroll href="<?= base_url('periksa'); ?>">Periksa</a></li>
                            <li><a class="<?php if ($this->uri->uri_string() == "Contact") {
                                                echo "active";
                                            } ?>" data-scroll href="<?= base_url('Contact'); ?>">Contact</a></li>
                            <li><a class="<?php if ($this->uri->uri_string() == "administrator/login") {
                                                echo "active";
                                            } ?>" data-scroll href="<?= base_url('administrator/login'); ?>">Login</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="serch-bar navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="btn btn-info btn-lg" data-scroll href="<?= site_url('administrator/login'); ?>">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>