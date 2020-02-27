<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental Mobil</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/assets_stisla') ?>/assets/img/logo.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Datetime Picker -->
    <link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
		<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/assets_shop') ?>/css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0F0E20; height: 75px;">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('customer/dashboard') ?>">Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('customer/dashboard')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('customer/rental/tentang_kami')?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('customer/rental/faqs')?>">Faqs</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                    <li class="nav-item ml-4">
                        <?php if (isset($_SESSION['level']) == 2) { ?>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i> <?= $this->fungsi->user_login()->nama ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i
                                        class="fas fa-sign-out-alt"></i> Logout</a>
                                <!-- <a class="dropdown-item" href="<?= base_url('auth/ganti_password') ?>"><i
                                        class="fas fa-lock"></i> Ganti Password</a> -->
                                <a class="dropdown-item" href="<?= base_url('customer/rental/riwayat_sewa') ?>"><i
                                        class="fa fa-tasks"></i>
                                    Riwayat Sewa</a>

                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="mt-2">
                            <a class="text-white" style="text-decoration: none" href="<?= base_url('auth/login') ?>"><i
                                    class="fas fa-sign-in-alt"></i> Login </a>
                        </div>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>