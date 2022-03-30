<?php
include_once "../config.php";
include_once "../action/login.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>
            Speleccio
        </title>
        <link rel="stylesheet" href="../../../assets/css/app.css"/>
        <link rel="icon" type="image/png" href="../../../assets/img/speleccio_logo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body style="margin:0">
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../../../assets/img/speleccio_logo.png" alt="" height="30">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0" style="width: 100%;">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil</a>
                            </li>
                            <div class="position-relative" style="border:solid 1px black; margin: 0% 40%; display: flex; align-items: center; align-content: center;">
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Wiki
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Les commandes</a></li>
                                        <li><a class="dropdown-item" href="#">Les rangs</a></li>
                                        <li><a class="dropdown-item" href="#">Les quêtes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Projets
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Les commandes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item" style="display: flex; align-items: center; align-content: center;">
                                    <a class="nav-link" href="index.php">Les News</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>