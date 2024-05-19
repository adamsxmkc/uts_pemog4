<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Dosen</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Nunito' rel='stylesheet' type='text/css' />
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .navbar-cls-top {
            background-color: #343a40;
            border-bottom: none;
            padding: 15px 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-family: 'Pacifico', cursive;
            font-size: 26px;
        }

        .navbar-brand:hover {
            color: #c0c0c0 !important;
        }

        .navbar-header .navbar-toggle {
            border: 1px solid #ffffff;
        }

        .navbar-header .navbar-toggle .icon-bar {
            background-color: #ffffff;
        }

        .navbar-default .navbar-side {
            background-color: #343a40;
            padding: 30px 0;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .sidebar-collapse {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 20px;
        }

        #main-menu>li>a {
            color: #343a40 !important;
            padding: 12px 20px;
            border-radius: 20px;
            margin: 5px 0;
            display: block;
            transition: all 0.3s ease;
            font-size: 16px;
            background: #f8f9fa;
            border: 1px solid #ddd;
        }

        #main-menu>li>a:hover {
            background-color: #343a40 !important;
            color: #ffffff !important;
            transform: scale(1.05);
        }

        .square-btn-adjust {
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .square-btn-adjust:hover {
            background-color: #495057;
            color: white;
        }

        #wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        #page-wrapper {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            flex: 1;
            margin: 20px;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            transition: box-shadow 0.3s;
        }

        .panel:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .panel-heading {
            background-color: #343a40;
            color: white;
            padding: 18px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .panel-body {
            padding: 25px;
        }

        .table thead {
            background-color: #e9ecef;
            font-weight: bold;
            color: #343a40;
        }

        .table thead th {
            border-bottom: 2px solid #dee2e6;
            padding: 12px;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-danger {
            color: white;
            background-color: #dc3545;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        .btn-sm {
            padding: .3rem .6rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

        .user-image {
            border-radius: 50%;
            border: 3px solid #343a40;
            margin: 20px 0;
            width: 100px;
            height: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-image: url('https://i.pinimg.com/564x/d4/5b/f7/d45bf7676fdd840b0a51019451b41164.jpg');
            background-size: cover;
            background-position: center;
        }

        h2 {
            color: #343a40;
            font-family: 'Pacifico', cursive;
            font-size: 32px;
        }

        h5 {
            color: #343a40;
            font-size: 18px;
        }

        hr {
            border: 1px solid #dee2e6;
        }

        @media (max-width: 768px) {
            .navbar-header {
                text-align: center;
            }

            .navbar-brand {
                float: none;
                display: inline-block;
            }

            .navbar-header .navbar-toggle {
                margin-top: 8px;
            }

            #main-menu>li>a {
                text-align: center;
            }

            .sidebar-collapse {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Universitas Pribumi Asli</a>
            </div>
            <div style="color: white; float: right; font-size: 16px;">
                &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Login</a>
                <a href="logout.html" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a href="/mahasiswa"><i class="fa fa-user "></i> Mahasiswa</a>
                    </li>
                    <li>
                        <a href="/dosen"><i class="fa fa-user "></i> Dosen</a>
                    </li>
                    <li>
                        <a href="/pegawai"><i class="fa fa-user "></i> Pegawai </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Universitas Pribumi Asli</h2>
                        <h5>Web Aktivitas Akademik UPA</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <?= $this->renderSection('isi_content') ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/custom.js"></script>
</body>

</html>
