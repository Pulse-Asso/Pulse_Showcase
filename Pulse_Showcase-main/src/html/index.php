<?php 
session_start();

// Préparation du popup dans une variable si le status est "success" ou "fail"
$popup = '';
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] === 'success') {
        // On utilise le buffering pour récupérer le contenu du fichier success.php
        ob_start();
        include ('../components/popup/success.php');
        $popup = ob_get_clean();
    } elseif ($_SESSION['status'] === 'fail') {
        // On utilise le buffering pour récupérer le contenu du fichier fail.php
        ob_start();
        include ('../components/popup/fail.php');
        $popup = ob_get_clean();
    }

    // On supprime les variables de session après usage
    unset($_SESSION['status'], $_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Pulse - L'application étudiante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="événements étudiants, communication universitaire, associations étudiantes, EPF, EM Lyon, vie étudiante, projet universitaire, réseau inter-écoles, application étudiante, application communication universitaire, évènements étudiants">
    <meta name="description" content="L'application d'évènements universitaires pour booster la communication sur vos campus">
    <link rel="canonical" href="https://pulse-showcase.onrender.com/index.html">

    <!-- Balises Open Graph -->
    <meta property="og:title" content="Pulse - L'application étudiante">
    <meta property="og:description" content="L'application d'évènements universitaires pour booster la communication sur vos campus">
    <meta property="og:image" content="../img/Logo_Pulse.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pulse">
    <meta property="og:locale" content="fr_FR">

    <!-- Balises Article -->
    <meta property="article:author" content="Vianney Otton, Nathalie Saada, Damien Drozd">
    <meta property="article:published_time" content="2024-08-15T00:00:00+00:00">


    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/popup/success.css">
    <link rel="stylesheet" href="../css/popup/fail.css">

    <style>
        /* Ajouté pour garantir la largeur complète */
        .container-xxl {
            max-width: 100% !important; /* Assurez-vous que la largeur maximale est 100% */
            padding-left: 0; /* Supprimez les marges internes à gauche */
            padding-right: 0; /* Supprimez les marges internes à droite */
        }

        /* Assurez-vous que les éléments positionnés utilisent toute la largeur disponible */
        .position-relative, .position-fixed {
            width: 100% !important;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">

    <!-- Affichage du popup success (s'il existe) -->
    <?php echo $popup; ?>

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- en tête -->
        <div class="container-xxl position-relative p-0" id="home">
            <?php 
                include('../components/navbar.php');
            ?>
            <!-- pq vous en avez besoin -->
            <div class="container-xxl bg-primary hero-header">
                <!-- Vos contenus -->
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Booster la vie sur vos campus avec PULSE</h1>
                            <p class="text-white pb-3 animated slideInDown">
                                Une application intuitive pour atteindre efficacement les étudiants en centralisant l'ensemble de la communication présente sur les réseaux actuels
                            </p>
                            <a href="#Pulse" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">En savoir plus</a>
                            <a href="#contact" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Nous contacter</a>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="../img/Home.png" alt="home_img">
                                <img class="img-fluid" src="../img/9.png" alt="exemple de post">
                                <img class="img-fluid" src="../img/6.png" alt="Profil utilisateur">
                                <img class="img-fluid" src="../img/5.png" alt="calendrier d'évènements">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin en tête -->

        
        <!-- a propos -->
        <div class="container-xxl py-2" id="Pulse">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <!-- Colonne de texte -->
                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">A propos</h5>
                        <h1 class="mb-4">1er canal de communication universitaire</h1>
                        <p class="mb-4">
                            Nous rejoindre c'est intégrer un réseau de 3 500 écoles tout en partageant facilement vos informations privées avec vos étudiants.
                        </p>
                        <div class="row g-4 mb-4">
                            <!-- Bloc 1 -->
                            <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <i class="fa fa-school fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">1</h2>
                                        <p class="text-primary-gradient mb-0">Canal privé</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Bloc 2 -->
                            <div class="col-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <i class="fa fa-globe fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">3500</h2>
                                        <p class="text-secondary-gradient mb-0">Membres du réseau universitaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bouton (facultatif) 
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">
                            En savoir plus
                        </a>
                        -->
                    </div>

                    <!-- Colonne d'image -->
                    <div class="col-12 col-md-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" 
                            src="../img/3screens.png" alt="3 screens">
                    </div>
                </div>
            </div>
        </div>
        <!-- fin a propos -->


        <!-- mission valeur -->
        <div class="container-xxl py-5" id="qui">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <!-- Colonne pour l'image (à gauche) -->
                    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center justify-content-md-start wow fadeInUp" 
                        data-wow-delay="0.3s">
                        <!-- On utilise .img-fluid pour un rendu responsive -->
                        <!-- On peut limiter la hauteur si besoin (ex: style="max-height:350px;") -->
                        <img src="../img/vmv.jpg" alt="Vision, Mission, Valeurs" class="img-fluid" style="max-height:350px;">
                    </div>
                    
                    <!-- Colonne pour le texte (à droite) -->
                    <!-- ps-md-4 ps-lg-5 ajoute un padding-left sur md (≥768px) et encore plus sur lg (≥992px) -->
                    <div class="col-12 col-md-6 col-lg-8 wow fadeInUp ps-md-4 ps-lg-5" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Notre objectif</h5>
                        <h1 class="mb-4">Vision - Mission - Valeurs</h1>
                        <p class="mb-4">
                            Devenir la plateforme de référence qui révolutionne l'expérience étudiante 
                            en connectant tous les acteurs de la vie universitaire.
                        </p>
                        <p class="mb-4">
                            Simplifier et Dynamiser la vie étudiante sur les campus universitaires 
                            tout en partageant nos valeurs.
                        </p>
                        <a href="../html/equipe.php" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mission valeur fin -->


        <!-- pour qui -->
        <div class="container-xxl py-5" id="qui">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Pour qui ?</h5>
                        <h1 class="mb-4">S'adresse à tous les établissements d'enseignement supérieur</h1>
                        <p class="mb-4">Nous proposons un abonnement annuel adapté en fonction du nombre d'étudiants, tout en garantissant un accès 100 % gratuit à l'application pour les étudiants des écoles partenaires. </p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Fonctionnalités développées pour satisfaire un besoin commun à de nombreux établissements</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Application co-construite par les étudiants</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Présence sur les campus pour accompagner la transition</p>
                        <!-- <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">En savoir plus</a> -->
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <img class="img-fluid" src="../img/actu.png" alt="" width="300px">
                    </div>
                </div>
            </div>
        </div>
        <!-- pour qui End -->

        
        <!-- Fonctionnalités début -->
        <section class="fonctionnalites">
            <div class="container py-5 px-4 px-lg-5" id="Fonctionnalites">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Fonctionnalités</h5>
                    <h1 class="mb-5">Caractéristiques de l'application</h1>
                </div>

                <!-- 
                row-cols-1 : 1 colonne sur mobile (<576px)
                row-cols-sm-2 : 2 colonnes à partir de sm (≥576px)
                row-cols-lg-3 : 3 colonnes à partir de lg (≥992px)
                g-4 : espacement entre les cartes
                justify-content-center : centre les colonnes si elles n’occupent pas toute la largeur
                text-center : centre le texte dans les colonnes
                -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center text-center">
                    <!-- Carte 1 -->
                    <div class="col">
                        <!-- mx-auto + max-width pour limiter la largeur de chaque carte 
                            et la centrer physiquement -->
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-1 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-compass text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Fil d'actualité</h5>
                            <p class="m-0">
                                Voir, aimer et participer aux différents évènements autour de soi.
                                Voir les évènements de son école, de son campus, et/ou de sa promotion.
                            </p>
                        </div>
                    </div>

                    <!-- Carte 2 -->
                    <div class="col">
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-2 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-layer-group text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Bannière d'information</h5>
                            <p class="m-0">
                                Une bannière remplie par l'administration de l'école pour transmettre 
                                ses informations avec un maximum de visibilité.
                            </p>
                        </div>
                    </div>

                    <!-- Carte 3 -->
                    <div class="col">
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-3 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-bullseye text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Posts ciblés</h5>
                            <p class="m-0">
                                Des posts ciblés en fonction du profil de l'étudiant(e) :
                                école/université, campus, année de promotion.
                            </p>
                        </div>
                    </div>

                    <!-- Carte 4 -->
                    <div class="col">
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-4 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Connexion sécurisée</h5>
                            <p class="m-0">
                                Connexion sécurisée SSO pour permettre aux étudiant(e)s et à l'administration 
                                des écoles/universités partenaires d'accéder à l'application.
                            </p>
                        </div>
                    </div>

                    <!-- Carte 5 -->
                    <div class="col">
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-5 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-globe text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Réseau inter-écoles</h5>
                            <p class="m-0">
                                Évènements ouverts aux étudiants d'autres écoles/universités 
                                visibles sur le fil d'actualité.
                            </p>
                        </div>
                    </div>

                    <!-- Carte 6 -->
                    <div class="col">
                        <div class="nat-item rounded p-4 mx-auto" style="max-width: 400px;">
                            <div class="d-inline-flex align-items-center justify-content-center icon-container gradient-6 rounded-circle mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-calendar-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 20px;">Calendrier d'évènements</h5>
                            <p class="m-0">
                                Un calendrier pour visualiser l'ensemble des évènements à venir 
                                et s'inscrire à ceux qui les intéressent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fonctionnalités fin -->


<!-- Bienfaits début -->
<div class="container py-5" id="Bienfaits">
    <div class="row align-items-center mb-5">
        <!-- Colonne gauche : Titre et texte -->
        <div class="col-12 col-lg-6 text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-3">Un BOOST pour votre école</h1>
            <p class="mb-4">
                Nous choisir, c'est choisir de simplifier et de centraliser l'ensemble de 
                la communication sur une seule plateforme.
            </p>
        </div>
        
        <!-- Colonne droite : Image + cercle jaune -->
        <div class="col-12 col-lg-6 text-center position-relative d-flex justify-content-center wow fadeInUp" data-wow-delay="0.3s">
            <!-- Cercle jaune en arrière-plan -->
            <div class="yellow-circle" 
                 style="position: absolute; width: 300px; height: 300px; border-radius: 50%; background: #ffd70033; z-index: 0;">
            </div>
            <!-- Image au premier plan -->
            <img src="../img/phone2.jpg" alt="Person with phone" class="img-fluid" 
                 style="position: relative; z-index: 1; max-height: 300px;">
        </div>
    </div>

    <!-- Section des avantages -->
    <!-- row-cols-1 row-cols-md-2 row-cols-lg-4 : 1 colonne sur mobile, 2 sur tablette, 4 sur desktop -->
    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
        <!-- Avantage 1 -->
        <div class="col d-flex flex-column align-items-center text-center">
            <h5>
                <i class="fa fa-chart-line fa-2x text-primary-gradient me-2"></i>
                Organisationnel
            </h5>
            <p class="mt-2">
                Accélérez la circulation d'informations sur vos campus et 
                à l'ensemble du réseau d'écoles.
            </p>
        </div>

        <!-- Avantage 2 -->
        <div class="col d-flex flex-column align-items-center text-center">
            <h5>
                <i class="fas fa-users fa-2x text-primary-gradient me-2"></i>
                Social
            </h5>
            <p class="mt-2">
                Renforcez l'engagement des étudiants et favorisez la création de liens sociaux.
            </p>
        </div>

        <!-- Avantage 3 -->
        <div class="col d-flex flex-column align-items-center text-center">
            <h5>
                <i class="fa fa-mobile-alt fa-2x text-primary-gradient me-2"></i>
                Technologique
            </h5>
            <p class="mt-2">
                Centralisez la communication sur l'ensemble des réseaux 
                (Facebook, Instagram, mails) en un seul lieu.
            </p>
        </div>

        <!-- Avantage 4 -->
        <div class="col d-flex flex-column align-items-center text-center">
            <h5>
                <i class="fa fa-wallet fa-2x text-primary-gradient me-2"></i>
                Économique
            </h5>
            <p class="mt-2">
                Réduisez les places d'évènements invendues et optimisez la 
                gestion des rachats/reventes.
            </p>
        </div>
    </div>
</div>
<!-- Bienfaits fin -->



        <!-- Notre équipe test -->
         <!--
        <div class="red-bar"></div>

        <div class="container-xxl py-5" id="equipe">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Les fondateurs du projet</h5>
                    <h1 class="mb-5">Notre équipe</h1>
                </div>

                <div class="row gy-5 gx-4 justify-content-center align-items-stretch">
                -->
                    <!-- Première image et texte -->
                     <!--
                    <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="profile-box">
                            <div class="profile-img-container">
                                <img src="img/vianney.jpg" class="img-fluid rounded-circle" alt="Image 1">
                            </div>
                            <h5 class="mt-4 mb-3">Vianney Otton</h5>
                            <h5 class="text-uppercase-light mb-3">INGENIEUR EPF & MIM EM-LYON</h5>
                            <p class="mb-0">“J'ai constaté que trop d'étudiants n'arrivaient plus à suivre les différents flux d'informations, les écoles en sont conscientes mais n'ont pas d'outil adapté. J'ai donc compris qu'il y avait un réel besoin de centralisation.”</p>
                        </div>
                    </div>
                    -->
                    <!-- Ligne de séparation verticale -->
                    <!--
                    <div class="col-lg-1 d-none d-lg-block">
                        <div class="position-relative h-100">
                            <div class="vr" style="height: 100%; width: 2px; background-color: #ffffff; margin: auto;"></div>
                        </div>
                    </div>
                    -->
                    <!-- Deuxième image et texte -->
                    <!--
                    <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="profile-box">
                            <div class="profile-img-container">
                                <img src="img/nat.jpg" class="img-fluid rounded-circle" alt="Image 2">
                            </div>
                            <h5 class="mt-4 mb-3">Nathalie Saada</h5>
                            <h5 class="text-uppercase-light mb-3">MASTER ENGINEERING MANAGEMENT EPF</h5>
                            <p class="mb-0">"Notre défi : Mettre en place la solution qui dynamisera la vie étudiante et simplifiera la communication entre l'administration et les élèves."</p>
                        </div>
                    </div>
                    -->
                    <!-- Ligne de séparation verticale -->
                    <!--
                    <div class="col-lg-1 d-none d-lg-block">
                        <div class="position-relative h-100">
                            <div class="vr" style="height: 100%; width: 1px; background-color: #ffffff; margin: auto;"></div>
                        </div>
                    </div>
                    -->
                    <!-- Troisième image et texte -->
                    <!--
                    <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="profile-box">
                            <div class="profile-img-container">
                                <img src="img/damien.jpg" class="img-fluid rounded-circle" alt="Image 3">
                            </div>
                            <h5 class="mt-4 mb-3">Damien Drozd</h5>
                            <h5 class="text-uppercase-light mb-3">INGENIEUR NUMERIQUE YNOV</h5>
                            <p class="mb-0">"En plus des évènements de son campus, on pourrait découvrir et participer à ceux d'autres écoles. Alors, pourquoi ne pas créer un réseau inter-écoles pour centraliser les événements auxquels chacun peut accéder ?"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        -->

        <!-- Images Section End test -->

            <!-- Why choose us Start -->
        <div class="container-why text-center">
            <h5 class="text-primary-gradient fw-medium text-center">Pourquoi choisir Pulse ?</h5>
            <h2 class="mb-4">Les avantages</h2>
            <div class="grid-why">
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-shield-alt text-white fs-4"></i>
                    </div>
                    <h3>Une application sécurisée</h3>
                    <p>L'accès à l'application est sécurisé avec l'authentification unique : SSO. Seul(e)s les étudiant(e)s des écoles/universités partenaires ont accès à l'application.</p>
                </div>
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-medal text-white fs-4"></i>
                    </div>
                    <h3>Notre expérience</h3>
                    <p>Cette application est créée par des étudiant(e)s pour des étudiant(e)s. Notre équipe a été pendant 5 ans au coeur de la vie étudiante dans les campus.</p>
                </div>
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-industry text-white fs-4"></i>
                    </div>
                    <h3>Une innovation made in France</h3>
                    <p>Pulse est une startup née en France et s'engage à promouvoir l'innovation française et la dynamisation sociale.</p>
                </div>
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-headset text-white fs-4"></i>
                    </div>
                    <h3>Une proximité avec vous</h3>
                    <p>Notre équipe est à l'écoute des différents retours de ses utilisateurs et utilisatrices. Nous sommes facilement joignables 7j/7.</p>
                </div>
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-puzzle-piece text-white fs-4"></i>
                    </div>
                    <h3>La réponse à des besoins réels</h3>
                    <p>Pulse répond à ce besoin de centralisation des informations et de cohésion entre étudiants qui se fait sentir dans de nombreuses écoles et universités.</p>
                </div>
                <div class="card-why">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fa fa-network-wired text-white fs-4"></i>
                    </div>
                    <h3>L'accès à un réseau d'opportunités</h3>
                    <p>Être membre de Pulse, c'est appartenir à un réseau d'écoles et d'universités ouvrant leurs portes aux étudiant(e)s pour accéder à diverses opportunités.</p>
                </div>
            </div>
        </div>
        <!-- why choose us end -->


        <!-- nous font confiance  --> 
        <div class="container-xxl py-1" style="margin-top: 50px;">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Partenariats</h5>
                    <h1 class="mb-3">Nous font confiance</h1><br><br>
                </div>
            </div>
        </div>

        <div class="logo-slider">
            <div class="slider-track">
                <div class="logo-container">
                    <img src="../img/bde.jpg" alt="Entreprise 2" class="logo">
                    <img src="../img/uva.png" alt="Entreprise 3" class="logo">
                    <img src="../img/bds.jpg" alt="Entreprise 3" class="logo">
                    <img src="../img/epf.png" alt="Entreprise 1" class="logo">
                    <img src="../img/bde_ice.jpg" alt="Entreprise 3" class="logo">
                    <img src="../img/je.jpg" alt="Entreprise 3" class="logo">

                </div>
                <div class="logo-container">
                    <img src="../img/bde.jpg" alt="Entreprise 2" class="logo">
                    <img src="../img/uva.png" alt="Entreprise 3" class="logo">
                    <img src="../img/bds.jpg" alt="Entreprise 3" class="logo">
                    <img src="../img/epf.png" alt="Entreprise 1" class="logo">
                    <img src="../img/bde_ice.jpg" alt="Entreprise 3" class="logo">
                    <img src="../img/je.jpg" alt="Entreprise 3" class="logo">

                </div>
            </div>
        </div>

        <!-- fin nous font confiance  -->


        <!-- Testimonial Start 
        <div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Avis</h5>
                    <h1 class="mb-5">Que disent nos utilisateurs !</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/savattero.jpeg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Eric SAVATTERO</h5>
                                <p class="mb-1">Directeur des études EPF</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/vincent.jpeg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Vincent COUTEAUX</h5>
                                <p class="mb-1">Chargé d'expérience étudiante</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-3.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">XXX</h5>
                                <p class="mb-1">Président du BDE</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-4.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
        Testimonial End -->


        <!-- Formulaire de demande de devis -->
        <form id="contactForm" action="../action/action_quote.php" method="POST">
            <div class="container-xxl" id="contact">
                <div class="container px-lg-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium mb-3">Demande de devis</h5>
                        <h1 class="mb-5">Formulez-nous votre demande</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="wow fadeInUp" data-wow-delay="0.3s">
                                <div class="mb-4">
                                    <label for="choice" class="form-label">Je souhaite :</label>
                                    <select class="form-select" id="choice" name="choice" required>
                                        <option value="">Sélectionner un choix *</option>
                                        <option value="rendez-vous">Faire une demande de rendez-vous</option>
                                        <option value="question">Poser une question</option>
                                    </select>
                                </div>

                                <!-- Section "Demande de rendez-vous" -->
                                <div id="rendez-vous-section" class="mb-5">
                                    <h5 class="text-primary mb-4">Informations pour le rendez-vous</h5>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="nom" name="nom" 
                                            placeholder="Votre nom" required minlength="2" maxlength="50">
                                        <label for="nom">Nom</label>
                                    </div>
                                                                
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="prénom" name="prénom" 
                                            placeholder="Votre Prénom" required minlength="2" maxlength="50">
                                        <label for="sites">Prénom</label>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="etablissement" name="etablissement" 
                                            placeholder="Nom de l'établissement" required minlength="2" maxlength="255" 
                                            title="Le nom de l'établissement doit comporter entre 2 et 255 caractères.">
                                        <label for="etablissement">Nom de l'établissement</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="sites" name="sites" 
                                            placeholder="Nombre de sites (campus)" required
                                            title="Veuillez saisir un nombre valide pour les sites.">
                                        <label for="sites">Nombre de sites (campus)</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="number" class="form-control" id="etudiants" name="etudiants" 
                                            placeholder="Nombre d'étudiants" required min="1" max="1000000" 
                                            title="Veuillez entrer un nombre d'étudiants.">
                                        <label for="etudiants">Nombre d'étudiants</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email_contact" name="email_contact" 
                                            placeholder="Adresse mail de contact" required maxlength="255" 
                                            title="Veuillez entrer une adresse email valide.">
                                        <label for="email_contact">Adresse mail de contact</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="tel" class="form-control" id="telephone" name="telephone" 
                                            placeholder="Numéro de téléphone (exemple : +33 6 12 34 56 78)" required pattern="^\+?[0-9]{1,3}[\s\-]?(\([0-9]{1,4}\)|[0-9]{1,4})[\s\-]?[0-9]{2,4}([\s\-]?[0-9]{2,4}){1,3}$" 
                                            title="Veuillez entrer un numéro de téléphone valide (exemple : +33 6 12 34 56 78).">
                                        <label for="telephone">Numéro de téléphone</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="disponibilites" name="disponibilites" 
                                            placeholder="Quelles sont vos disponibilités ?" required maxlength="500" 
                                            title="Veuillez décrire vos disponibilités (maximum 500 caractères).">
                                        <label for="disponibilites">Quelles sont vos disponibilités ?</label>
                                    </div>
                                    <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="request_quote" name="request_quote" required>

                                        <label class="form-check-label" for="request_quote">Je souhaite un devis</label>
                                    </div>

                                    <!-- Bouton envoyer la demande -->
                                    <div class="text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
                                    </div>
                                </div>

                                <!-- Section "Questions" -->
                                <div id="question-section" class="mb-5">
                                    <h5 class="text-primary mb-4">Avez-vous des questions ?</h5>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="nom" name="nom" 
                                            placeholder="Votre nom" required minlength="2" maxlength="255">
                                        <label for="nom">Nom</label>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="prénom" name="prénom" 
                                            placeholder="Votre Prénom" required>
                                        <label for="sites">Prénom</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email_contact" name="email_contact" 
                                            placeholder="Adresse mail de contact" required maxlength="255" 
                                            title="Veuillez entrer une adresse email valide.">
                                        <label for="email_contact">Adresse mail</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="tel" class="form-control" id="telephone" name="telephone" 
                                            placeholder="Numéro de téléphone (exemple : +33 6 12 34 56 78)" required pattern="^\+?[0-9]{1,3}[\s\-]?(\([0-9]{1,4}\)|[0-9]{1,4})[\s\-]?[0-9]{2,4}([\s\-]?[0-9]{2,4}){1,3}$" 
                                            title="Veuillez entrer un numéro de téléphone valide (exemple : +33 6 12 34 56 78).">
                                        <label for="telephone">Numéro de téléphone</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder="Laissez un message ici" required maxlength="500" 
                                            title="Veuillez laisser un message ou une question (maximum 500 caractères)." style="height: 150px"></textarea>
                                        <label for="message">Messages / Questions</label>
                                    </div>

                                    <!-- Bouton envoyer la demande -->
                                    <div class="text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- fin de demande de devis -->
       
            
        <!-- Footer Start -->
        <?php 
            include('../components/Footer.php');
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/form_quote.js"></script>
    <script src="../js/alert.js"></script>

</body>

</html>