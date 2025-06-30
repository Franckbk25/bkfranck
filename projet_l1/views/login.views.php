<?php $title = " Connexion - ";  ?>
<?php include('partials/_header.php'); ?>

<body>
    <!-- Top bar Start -->
    <?php include('partials/_topbar.php'); ?>
    <!-- Top bar End -->

    <!-- Navbar Start -->
    <?php  include('partials/_nav.php'); ?>
    <!-- Navbar End -->
                <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
                        <div class="container py-5">
                            <div class="row align-items-center">
                                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Maîtrisez les langues</h5>
                        <h1 class="text-white">30% de réduction pour les nouveaux étudiants</h1>
                    </div>
                    <p class="text-white">
                        Apprenez l’anglais, le français, l’espagnol et bien plus encore, à votre rythme et depuis n’importe quel appareil.
                        Notre plateforme vous accompagne dans votre parcours universitaire en renforçant vos compétences linguistiques.
                    </p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>
                            Accès à des cours en ligne ou en présentiel
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>
                            Suivi personnalisé selon votre niveau
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>
                            Certification officielle à la fin du parcours
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Login </h1>
                            <?php if (!empty($message)) echo $message; ?>

                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4" placeholder="Votre email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="mot_de_passe" class="form-control border-0 p-4" placeholder="Votre mot de passe" required="required" />
                                </div>
                                <div>
                                    <button name="connexion" class="btn btn-dark btn-block border-0 py-3" type="submit">Connexion</button>
                                </div>
                                <div class="text-center mt-3">
                                    <small class="text-white">Déjà un compte ? <a href="signup.php" class="text-warning font-weight-bold">Créer un compte</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('partials/_footer.php'); ?>