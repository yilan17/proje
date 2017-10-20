<?php
include "db.php";
session_start();
if($_SESSION["login"]==true){
$id=$_SESSION["id"];
$query = $db->query("SELECT * FROM user WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
 if ($query){


?>


<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->


		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="UTF-8">
		<title>Nevşehir Belediye</title>
		<meta name="keywords" content="Nevşehir Belediye" />
		<meta name="description" content="Nevşehir Belediye">
		<meta name="author" content="okler.net">



		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="anasayfa.php" class="logo">
						<img src="assets/images/logo.jpg" height="35" alt="" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo $query["ad"];?></span>
								<span class="role"><?php echo $query["yetki"];?></span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i>Profil</a>
								</li>

								<li>
									<a role="menuitem" tabindex="-1" href="cikis.php"><i class="fa fa-power-off"></i> Çıkış</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Menü
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="anasayfa.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Hizmet Binası</span>
										</a>
									</li>
									<li>
										<a href="personel.php">
											<i class="fa fa-group" aria-hidden="true"></i>
											<span>Personeller</span>
										</a>
									</li>
									<li>
										<a href="user.php">
											<i class="fa fa-street-view" aria-hidden="true"></i>
											<span>Kullanıcılar</span>
										</a>
									</li>
                  <li class="nav-parent">
										<a>
											<i class="fa fa-gears" aria-hidden="true"></i>
											<span>Ayarlar</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="birim.php">
													 Birim Ekle/Çıkar
												</a>
											</li>
											<li>
												<a href="b_isletimsistemi.php">
													 Bilgisayar Ayarları
												</a>
											</li>
                    </ul>
                  </li>
								</ul>
							</nav>
						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
<?php
}}
else{
	header("location:index.php");
}

?>
