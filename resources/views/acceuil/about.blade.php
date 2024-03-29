<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEPTO SERVICE Sarl</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../acceuil/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../acceuil/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../acceuil/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../acceuil/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+237 699839916</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>SEPTOSERVICE@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">SEPTO SERVICE Sarl</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../" class="nav-item nav-link active">Acceuil</a>
                        <a href="/about" class="nav-item nav-link">A propos </a>
                        <!-- <a href="/service" class="nav-item nav-link">Service</a> -->
                        <div class="nav-item dropdown">
                            <a href="/voiture" class="nav-link dropdown-toggle" data-toggle="dropdown">Vehicules</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/voiture" class="dropdown-item">Liste Des Vehicules</a>
                            </div>
                        </div>

                        <!-- <a href="/contact" class="nav-item nav-link">Contact</a> -->
                         <a href="/profile" class="nav-item nav-link">profile</a>
                         <!-- le code suivant est executer si l'utilisateur est connecter et a la permission d'acceder au dashboard -->
                         @if (auth()->check())
                         @if (Auth::User()->hasPermission('dashboard-bord'))
                           <a href="/dashboard" class="nav-item nav-link">Dashbord</a>
                         @endif
                        @endif

                        @guest
                        <a href="/login" class="nav-item nav-link">Connexion</a>
                        @endguest
                        <!-- se lien apparait si l'utilisateur n'est pas connecter -->
                        @guest
                        <a href="/register" class="nav-item nav-link">s'inscrire</a>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">A Propos de nous</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">A Propos de nous</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Bienvenue <span class="text-primary">Chez SEPTO SERVICE Sarl</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>Louer une voiture offre de nombreux avantages, l’un des principaux étant la liberté de déplacement et d’horaire dont vous jouissiez en prenant le volant, y compris avec une location de voiture de courte durée. Vous aurez ainsi la possibilité de parcourir les paysages de campagne ou de vous rendre dans des villages, certes charmants, mais parfois mal desservis par les transports en commun. Et si vous envisagez de nombreux déplacements, cela vous reviendra moins cher que de prendre un taxi à chaque fois, sans compter l’aspect pratique d’avoir sa propre voiture pour sillonner les routes. Pour un séjour de longue durée, la location de voiture au mois s’avère donc souvent avantageuse. Enfin, pour planifier l’itinéraire de vos vacances, ce sera beaucoup plus simple : vous aurez une voiture à votre disposition et vous n’aurez pas à tenir compte des horaires de trains ou de bus pour vos visites dans la région. Pour votre escapade en famille comme pour vos voyages d’affaires, vous disposerez d’un moyen de transport pour vous rendre d’une destination à l’autre sans stress.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Support SEPTO SERVICE Sarl</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Reservation de voiture à tous moment</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="../acceuil/img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Veux-tu Conduire?</h3>
                            <p class="mb-4"></p>
                            <a class="btn btn-primary py-2 px-4" href="">Commence Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Vous cherchez une voiture?</h3>
                            <p class="mb-4"></p>
                            <a class="btn btn-primary py-2 px-4" href="">Commencez Maintenant</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="../acceuil/img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="../acceuil/img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Entrer en contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Douala, Cameroun</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+237 699839916</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>SEPTOSERVICE@gmail.com</p>
                <h6 class="text-uppercase text-white py-2">Suivez-Nous</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Liens Utiles</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Politique de confidentialité</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Terme & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Nouveau Membre</a>
                    <!-- <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a> -->
                    <!-- <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a> -->
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Aide</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Galerie de voiture</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../acceuil/img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
            <p class="mb-2 text-center text-body">&copy; <a href="#">SEPTO SERVICE Sarl</a>. Tout Droit Reserver.</p>
            <p class="m-0 text-center text-body">ANIMPO KEVIN </p>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../acceuil/lib/easing/easing.min.js"></script>
        <script src="../acceuil/lib/waypoints/waypoints.min.js"></script>
        <script src="../acceuil/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../acceuil/lib/tempusdominus/js/moment.min.js"></script>
        <script src="../acceuil/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="../acceuil/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>