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
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 ms-5 text-dark text-decoration-none">
                <img src="../../../assets/img/speleccio_logo.png" alt="" height="45">
                <span class="ms-3 link-light">
                    Accueil
                </span>
            </a>
        
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a class="nav-link px-2 link-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Wiki
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                Les commandes
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Les rangs
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Les qu??tes
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link px-2 link-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                Les commandes
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 link-light">
                        Les News
                    </a>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn me-5 btn-outline-light me-2">Login</button>
            </div>
    </header>