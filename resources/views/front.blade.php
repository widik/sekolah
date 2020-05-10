<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$data['title']}}</title>

        <!-- Bootstrap -->
        <link href="{{asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
        <style>
            .fit-image{
                width: 70%;
                object-fit: cover;
                /* height: 160px; only if you want fixed height */
                background-color: transparent;
            }
        </style>
    </head>

    <body class="nav-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <!-- Header -->
                    <div class="row" style="height: 150px; border:1px solid red">
                        <div class="col-lg-4">
                            <img class="fit-image" src="{{asset('images/tutwuri.png')}}">
                        </div>
                        <div class="col-lg-8"><h1>Sistem Informasi Sekolah</h1></div>
                    </div>

                    <!-- Navigation -->
                    <nav class="navbar navbar-light bg-light justify-content-between"> <a class="navbar-brand">Navbar</a>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-4">
                <div class="card mb-3">
                <div class="card-header">
                    <h4 class="text-mono text-center">E-Learning</h4>
                </div>
                <div class="card-body">
                        <a href="/elearning">
                            <img src="{{asset('gentelella/images/elearning.png')}}" style="height: 110px;" class="mx-auto d-block">
                        </a>
                        <br />
                        <blockquote class="card-blockquote">
                            <p class="text-center"><a href="/elearning">>> MASUK <<<</a></p>
                        </blockquote>
                </div>
                </div>
                <div class="card mb-3">
                <div class="card-header">
                    <h4 class="text-mono text-center">E-LIBRARY</h4>
                </div>
                <div class="card-body">
                        <a href="/login">
                            <img src="{{asset('gentelella/images/book.jpg')}}" style="height: 110px;" class="mx-auto d-block">
                        </a>
                        <br />
                        <blockquote class="card-blockquote">
                            <p class="text-center"><a href="/login">>> MASUK <<<</a></p>
                        </blockquote>
                </div>
                </div>
                </div>
                <!-- Isi Content -->
                <div class="col-md-8 mb-3">
                <div class="card">
                <div class="card-header">
                    <h4 class="text-mono text-center">News</h4>
                </div>
                <div class="card-body">
                    <img style="float:left;" src="https://place-hold.it/130x130" class="img mr-3" />
                    <h5 class="card-title">News Article 1</h5>
                    <small><p>19/07/2018</p></small>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="article.html">Read More</a>
                    </p>
                    <img style="float:left;" src="https://place-hold.it/130x130" class="img mr-3" />
                    <h5 class="card-title">News Article 2</h5>
                    <small><p>19/07/2018</p></small>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="article.html">Read More</a>
                    </p>
                    <img style="float:left;" src="https://place-hold.it/130x130" class="img mr-3" />
                    <h5 class="card-title">News Article 3</h5>
                    <small><p>19/07/2018</p></small>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="article.html">Read More</a>
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-md-center">&copy; Copyright <?=date("Y");?> - <a href="#">Sistem Informasi Sekolah</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{asset('gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('gentelella/vendors/nprogress/nprogress.js')}}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{asset('gentelella/build/js/custom.min.js')}}"></script>
    </body>
</html>
