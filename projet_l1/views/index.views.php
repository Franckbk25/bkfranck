<?php $title = " Accueil - ";  ?>
<?php include('partials/_header.php'); ?>

<body>
    <!-- Top bar Start -->
    <?php include('partials/_topbar.php'); ?>
    <!-- Navbar Start -->
    <?php  include('partials/_nav.php'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Formations en ligne & en présentiel</h5>
                            <h1 class="display-3 text-white mb-md-4">Apprenez les langues qui ouvrent les portes du monde</h1>
                            <a href="login.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Se connecter</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Plateforme universitaire</h5>
                            <h1 class="display-3 text-white mb-md-4">Inscrivez-vous facilement à vos cours de langues</h1>
                            <a href="login.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Se connecter</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Maîtrise linguistique à portée de clic</h5>
                            <h1 class="display-3 text-white mb-md-4">Suivez vos cours de langues n’importe où, n’importe quand</h1>
                            <a href="login.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
<?php include('testimony.php'); ?>
    <!-- Testimonial End -->

    <!-- Footer Start -->
<?php include('partials/_footer.php'); ?>