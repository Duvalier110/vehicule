<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SEPTO SERVICE Sarl Admin </title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('assets/image/png')}}" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('nav')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <a href="/">Aceuil</a>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">{{ Auth::user()->name }} </span>
                                    </a>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary">
                                            <a href="#" class="dropdown-item">
                                                <span class="ml-2">Déconnexion </span>
                                            </a>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('sider')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4> </h4>

                            <ul>
                                @foreach ($errors->all() as $error )
                                <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>

                            @if(session('ajouter'))
                            <div class="alert alert-success">
                                {{ session('ajouter') }}
                            </div>
                            @endif
                        </div>

                    </div>
                    <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div> -->
                </div>
                <!-- row -->

                <div class="container" style="margin-left: auto; margin-right:auto">

                    <div class="col-xl-6 col-xxl-12">

                        <div class="card">

                            <div class="container" style="margin-left: auto; margin-right:auto">

                                <h4 class="card-title">Ajouter un vehicule</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{url('vehicule')}}" enctype="multipart/form-data">
                                        <!-- multipart important pour uploads les image --->
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" name="mark" placeholder="entrez la marque">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-rounded" name="model" placeholder="entrez le modèle">
                                        </div>

                                        <div class="form-group">
                                            <label style="color: dark;">Image du véhicule</label>
                                            <input type="file" class="form-control input-rounded" name="vehicle_image" placeholder="entrez une photo">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-rounded" name="color" placeholder="entrez une couleur">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg" name="transmission">
                                                <option selected="selected">Transmission</option>
                                                <option value="Automatique">Automatique</option>
                                                <option value="Manuel">Manuel </option>
                                            </select>
                                            <div class="form-group">
                                                <select class="form-control form-control-lg" name="availability">
                                                    <option selected="selected">Selectionner le status</option>
                                                    <option value="Disponible">Disponible</option>
                                                    <option value="Non disponible">Non disponible </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control input-rounded" name="price_per_hour" placeholder="entrez le prix par heur">
                                        </div>
                                        <!-- fonction pour appeler une clé etrangere dans la table -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <select class="form-control form-control-lg" name="agence_id">
                                                    <option selected="selected">Selectionner une agence</option>
                                                    <!-- la boucle foreach permet de recuperer les elements dans un tableau -->
                                                    @foreach ($agence as $agence)
                                                    <option value="{{$agence->id}}">{{$agence->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="type_vehicule">
                                                        <option selected="selected">Selectionner un type</option>
                                                        @foreach ($type_vehicule as $type_vehicule)
                                                        <option value="{{$type_vehicule->name}}">{{$type_vehicule->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <input type="text" value="{{ Auth::user()->id }}" name="user_id" style="display: none;">
                                                
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/js/quixnav-init.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>

</body>

</html>