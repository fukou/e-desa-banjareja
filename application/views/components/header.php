<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Vendors Min CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/vendors.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">

	<title>E-Desa</title>

	<link rel="icon" type="image/png" href="<?= base_url()?>assets/img/favicon.png">
	<link href="<?php echo base_url();?>assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
	<!-- Vendors Min JS -->
	<script src="<?= base_url()?>assets/js/vendors.min.js"></script>

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

	<!-- Add Firebase products that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body>

	<!-- Start Sidemenu Area -->
	<div class="sidemenu-area">
		<div class="sidemenu-header">
			<a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
				<img style="width:30px;height:40px;" src="<?= base_url()?>assets/img/kebumen.png" alt="image">
				<span>e-Desa</span>
			</a>

			<div class="burger-menu d-none d-lg-block">
				<span class="top-bar"></span>
				<span class="middle-bar"></span>
				<span class="bottom-bar"></span>
			</div>

			<div class="responsive-burger-menu d-block d-lg-none">
				<span class="top-bar"></span>
				<span class="middle-bar"></span>
				<span class="bottom-bar"></span>
			</div>
		</div>

		<div class="sidemenu-body">
			<ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
				<li class="nav-item-title">
					Main
				</li>
				<li class="nav-item">
					<a href="<?= base_url()?>" class="nav-link">
						<span class="icon"><i class='bx bx-home-circle'></i></span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
						<span class="icon"><i class="bx bx bxs-layer"></i></span>
						<span class="menu-title">Master</span>
						<span class="badge float-right mr-4 mt-1">8</span>
					</a>

					<ul class="sidemenu-nav-second-level mm-collapse" style="height: 0px;">
						<li class="nav-item">
							<a href="<?= base_url()?>data_pengajuan_umum" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Data Pengajuan Umum</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>data_pindah_wni" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Data Pindah WNI</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>data_permohonan_ktp" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Data Permohonan KTP</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>data_permohonan_kk" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Data Permohonan KK</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>data_perubahan_penduduk" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Data Perubahan Penduduk</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>surat_keterangan_lahiran" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Surat Keterangan Lahir</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>surat_keterangan_kematian" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Surat Keterangan Kematian</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url()?>pengaduan" class="nav-link">
								<span class="icon"><i class='bx bx bx-task'></i></span>
								<span class="menu-title">Pengaduan</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- End Sidemenu Area -->

	<!-- Start Main Content Wrapper Area -->
	<div class="main-content d-flex flex-column">

		<!-- Top Navbar Area -->
		<nav class="navbar top-navbar navbar-expand">
            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <div class="responsive-burger-menu d-block d-lg-none">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>

                <ul class="navbar-nav left-nav align-items-center">
                    
                </ul>

                <form class="nav-search-form d-none ml-auto d-md-block">
                    
                </form>

                <ul class="navbar-nav right-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                            <i class="bx bx-fullscreen"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown profile-nav-item">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="menu-profile">
                                <span class="name">Hi! Admin</span>
                                <img src="assets/img/user1.jpg" class="rounded-circle" alt="image">
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="assets/img/user1.jpg" class="rounded-circle" alt="image">
                                </div>

                                <div class="info text-center">
                                    <span class="name">Admin</span>
                                    <p class="mb-3 email">hello@admin.com</p>
                                </div>
                            </div>

                            <!-- <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class='bx bx-user'></i> <span>Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class='bx bx-edit-alt'></i> <span>Edit Profile</span>
                                        </a>
                                    </li>

                                </ul>
                            </div> -->

                            <div class="dropdown-footer">
                                <ul class="profile-nav">
                                    <li class="nav-item">
                                        <a href="<?= base_url()?>login/logout" class="nav-link">
                                            <i class='bx bx-log-out'></i> <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
		<!-- End Top Navbar Area -->

		<!-- Breadcrumb Area -->
		<div class="breadcrumb-area">
			<!-- <h1><?= $title ?></h1> -->

			<ol class="breadcrumb">
				<li class="item"><a href="<?= base_url()?>"><i class='bx bx-home-alt'></i></a></li>
				<li class="item"><?= $title ?></li>
			</ol>
		</div>
		<!-- End Breadcrumb Area -->
