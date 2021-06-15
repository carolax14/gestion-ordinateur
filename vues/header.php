<?php
include '../includes/connexion.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Centre Culturel</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="all,follow" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../public/outils/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../public/outils/font-awesome/css/font-awesome.min.css" />
    <link href="../public/outils/font-awesome/css/all.css" rel="stylesheet" type="text/css" />
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../public/css/fontastic.css" />
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" />


    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../public/css/style.default.css" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../public/css/custom.css" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="" />
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block">
                                    <span>Centre </span><strong>Culturel</strong>
                                </div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none">
                                    <strong>BD</strong>
                                </div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Logout    -->
                            <li class="nav-item">
                                <a href="logout.php" onclick="return confirm('Voulez-vous quitter votre session ?');" class="nav-link logout">
                                    <span class="d-none d-sm-inline">Déconnexion</span><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar">
                        <img src="../public/img/avatar.svg" alt="..." class="img-fluid rounded-circle" />
                    </div>
                    <div class="title">
                        <h1 class="h4 text-capitalize"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]; ?></h1>
                        <p>Administrateur</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="home.php"> <i class="fas fa-home"></i>Acceuil </a>
                    </li>
                    <li>
                        <a href="#"> <i class="far fa-calendar-alt"></i>Calendrier </a>
                    </li>
                    <li>
                        <a href="reserv_ajout.php"> <i class="far fa-address-book"></i>Réservations </a>
                    </li>
                    <li>
                        <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                            <i class="fas fa-user-alt"></i>Visiteurs
                        </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                            <li><a href="visiteur_ajout.php">Ajouter</a></li>
                            <li><a href="visiteur_liste.php">Liste des visiteurs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#example" aria-expanded="false" data-toggle="collapse">
                            <i class="fas fa-laptop"></i>Ordinateurs
                        </a>
                        <ul id="example" class="collapse list-unstyled">
                            <li><a href="ordi_ajout.php">Ajouter</a></li>
                            <li><a href="ordi_liste.php">Liste des ordinateurs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="content-inner">