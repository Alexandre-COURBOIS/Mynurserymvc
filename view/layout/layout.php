<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Nursery</title>

    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" rel="stylesheet">

    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel="stylesheet"
          href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css"
          type="text/css"/>
    <link href="https://api.mapbox.com/mapbox-assembly/v0.23.2/assembly.min.css" rel="stylesheet"/>

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.fr-fr.js" type="text/javascript"></script>
</head>
<body>


<header id="myHeader">
    <div class="wrap-header">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?= $view->path('home'); ?>">
                <img src="<?= $view->asset('img/mynursery.png'); ?>" width="100" height="50"
                     alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <?php if (!empty($_SESSION)) { ?>
                        <li>
                            <a href="<?= $view->path('ajoutEnfant'); ?>" class="nav-link">Vos enfants</a>
                        </li>
                    <?php } ?>
                </ul>
                <?php if (empty($_SESSION)){?>
                    <div class="btn-toolbar">
                        <!-- Button for Modal -->
                        <button type="button" class="btn btn-outline-dark btn-sm mx-auto" data-toggle="modal"
                                data-target="#staticBackdrop">
                            Inscription
                        </button>

                        <!-- Modal -->

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                             aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form id="form">

                                            <div class="subscription-container">

                                                <input type="radio" name="radio" id="pro" value="pro">
                                                <label for="pro" class="subscription__button">
                                                    <h3 class="subscription__title">Vous êtes un</h3>
                                                    <h3 class="subscription__main-feature"> professionnel</h3>
                                                    <span class="subscription__price">Inscrivez-vous</span>
                                                </label>

                                                <input type="radio" name="radio" id="parent" value="parent">
                                                <label for="parent" class="subscription__button">
                                                    <h3 class="subscription__title">Vous êtes un</h3>
                                                    <h3 class="subscription__main-feature">Parent</h3>
                                                    <span class="subscription__price">Inscrivez-vous</span>
                                                </label>

                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>

                <div class="btn-toolbar">
                    <?php if (empty($_SESSION)) { ?>
                        <a href="connexion" class="btn btn-outline-dark btn-sm mx-auto" role="button">Connexion</a>
                    <?php } else { ?>
                        <a href="<?= $view->path('deconnexion'); ?>" class="btn btn-outline-dark btn-sm mx-auto" role="button">Deconnexion</a>
                    <?php } ?>
                </div>

        </nav>
    </div>
    </div>
</header>

<div class="container">
    <?= $content; ?>
</div>

<div class="separator"></div>
<footer class="footer bg-parallax">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="column col-lg-4">
                <div>
                    <div>
                        <a href="<?= $view->path('home'); ?>">
                            <img src="<?= $view->asset('img/mynursery.png'); ?>"
                                 alt="logo_mynursery" id="logo-footer"/>
                        </a>
                    </div>
                    <div>
                        <ul>
                            <li>Mettre adresse postale ici</li>
                            <li>N° de téléphone ici</li>
                            <li>Adresse mail ici</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column col-lg-2">
                <div>
                    <div>
                        <h4>Link</h4>
                        <ul>
                            <li>
                                <a href="<?= $view->path('home'); ?>" class="lien-footer">Home</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="lien-footer">Features</a>
                            </li>
                            <li>
                                <a href="#" class="lien-footer">Pages</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="lien-footer">Gallery</a>
                            </li>
                            <li>
                                <a href="#" class="lien-footer">Blog</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="lien-footer">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column col-lg-3">
                <div>
                    <div>
                        <h4>Social</h4>
                        <ul id="logo-social">
                            <li><a href="#"><img src="<?= $view->asset('img/facebook.png'); ?>" alt="logoFacebook" id="logo-social"/></a></li>
                            <li><a href="#"><img src="<?= $view->asset('img/instagram-sketched.png'); ?>" alt="logoInstagram" id="logo-social"/></a></li>
                            <li><a href="#"><img src="<?= $view->asset('img/linkedin.png'); ?>" alt="logoLinkedin" id="logo-social"/></a></li>
                            <li><a href="#"><img src="<?= $view->asset('img/twitter.png'); ?>" alt="LogoTwitter" id="logo-social"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="column col-lg-3">
                <div>
                    <div>
                        <h4>copyright</h4>
                        <p>© 2020 WEBAPSY</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.18.1"></script>

<script src="<?= $view->asset('js/searchadress.js'); ?>"></script>

<script src="<?= $view->asset('js/main.js'); ?>"></script>


</body>
</html>
