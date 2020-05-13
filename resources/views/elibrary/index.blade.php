<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminbite/assets/images/favicon.png')}}">
    <title>{{$data['title']}}</title>
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <!-- This page plugin CSS -->
    <link href="{{asset('adminbite/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <span class="logo-text">
                        <div class="row">
                            <div class="col-lg-2">
                            <img src="{{asset('images/icon-tutwuri.png')}}" style="padding-top:3px; width:60px; height:60px">
                            </div>
                            <div class="col-lg-6">
                                <h1 class="navbar-brand ml-2">Sistem Informasi Sekolah</h1>
                            </div>
                        </div>

                    </span>
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">
                    </ul>
                    <ul class="navbar-nav float-right">
                        @if(!empty(auth()->user()->name))
                            <h4 class="navbar-brand mt-2">Selamat Datang, {{auth()->user()->name}}</h4>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{asset('adminbite/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class="">
                                        <img src="{{asset('adminbite/assets/images/users/1.jpg')}}" alt="user" class="img-circle" width="60">
                                        </div>
                                        <div class="m-l-10">
                                            <h4 class="m-b-0">{{auth()->user()->name}}</h4>
                                        <p class=" m-b-0">{{auth()->user()->email}}</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/logout">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-user"></i>Masuk
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class="m-l-10">
                                            <h4 class="m-b-0">Login Form</h4>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <span id="msg_error"></span>
                                    </div>
                                    <form name="get_login"></form>
                                    <form name="form_login">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-l-30">
                                            <a href="#" class="btn btn-sm btn-success btn_login">Login</a>
                                        </div>
                                    </form>

                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Home</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/"><i class="icon-Car-Wheel"></i><span class="hide-menu">Home </span></a>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Apps</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-Box-withFolders"></i><span class="hide-menu">Apps </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-border-top"></i><span class="hide-menu">Profil 1</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-border-style"></i><span class="hide-menu">Profil 2</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>86%</h3>
                                    <h6 class="card-subtitle">Total Product</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>40%</h3>
                                    <h6 class="card-subtitle">Pending Product</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>56%</h3>
                                    <h6 class="card-subtitle">Product A</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>26%</h3>
                                    <h6 class="card-subtitle">Product B</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- place order / Exchange -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Buku</h4>

                                <div class="table-responsive">
                                    <table class="table table-bordered table_buku">
                                        <thead>
                                            <tr>
                                                <th>Kode </th>
                                                <th>Judul Buku</th>
                                                <th>Lokasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Pengunjung</h4>
                                <h6 class="card-subtitle">Silahkan di isi</h6>
                                <form class="m-t-20 form-horizontal" action="/guest/create" method="POST">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-6 ">
                                            <input type="text" id="nama" name="nama" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="kelas" name="kelas" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Keperluan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-6 ">
                                            <textarea class="form-control" id="keperluan" name="keperluan" rows="3" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Saran
                                        </label>
                                        <div class="col-md-9 col-sm-6 ">
                                            <textarea class="form-control" id="saran" name="saran" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">&nbsp;</div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-info btn-sm btn_visit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                   All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->

    <!-- ============================================================== -->
    <script src="{{asset('adminbite/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('adminbite/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('adminbite/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('adminbite/dist/js/app.min.js')}}"></script>
    <!-- Theme settings -->
    <script src="{{asset('adminbite/dist/js/app.init.horizontal-fullwidth.js')}}"></script>
    <script src="{{asset('adminbite/dist/js/app-style-switcher.horizontal.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('adminbite/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('adminbite/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('adminbite/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('adminbite/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('adminbite/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!--c3 JavaScript -->
    <script src="{{asset('adminbite/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('adminbite/assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('adminbite/dist/js/pages/dashboards/dashboard3.js')}}"></script>
    <!--DataTables -->
    <script src="{{asset('adminbite/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('adminbite/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>
        $(document).ready( function () {
            var table = $('.table_buku').DataTable({
                processing: true,
                serverSide: true,
                searching: false,
                bLengthChange: false,
                ajax: "{{url('elibrary/list')}}",
                columns: [
                    { data: 'kd_buku', name: 'kd_buku' },
                    { data: 'nama', name: 'nama' },
                    { data: 'lokasi', name: 'lokasi' }
                ]
            });

            $(".btn_login").click(function(e){
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var email = $("input[name='email']").val();
                var password = $("input[name='password']").val();

                $.ajax({
                    url: "{{ url('/elibrary/postlogin') }}",
                    type:'POST',
                    data: {_token:_token, email:email, password:password},
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                            $('form[name=get_login]').attr('action', data.action);
                            $("form[name='get_login']").submit();
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            });

            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $("#msg_error").text(msg);
            }

        });
    </script>
</body>

</html>
