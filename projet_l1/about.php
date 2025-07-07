<?php require('utils/title.php');?>
<?php $title = " Apropos - ";  ?>
<?php include('partials/_header.php'); ?>

<body>
    <!-- Top bar Start -->
    <?php include('partials/_topbar.php'); ?>
    <!-- Top bar End -->

    <!-- Navbar Start -->
    <?php  include('partials/_nav.php'); ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Apropos</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Apropos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">À Propos</h5>
                        <h1>Une Nouvelle Façon de Gérer l'Université</h1>
                    </div>
                    <p>
                        Cette plateforme web a été conçue pour moderniser et simplifier la gestion académique au sein des universités. 
                        Elle permet aux étudiants de s’inscrire facilement aux filières disponibles, d’accéder aux cours de langues en ligne ou en présentiel, 
                        et de suivre leurs démarches administratives sans se déplacer.
                        Grâce à une interface intuitive et sécurisée, elle offre une expérience fluide pour les étudiants, les enseignants et le personnel administratif.
                    </p>
                    <a href="course.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">En Savoir Plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
<?php include('testimony.php'); ?>
    <!-- Testimonial End -->

    <!-- Footer -->
<?php include('partials/_footer.php'); ?>