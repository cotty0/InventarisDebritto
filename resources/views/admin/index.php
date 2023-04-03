<?php
include '../koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Peminjaman Barang dan Ruangan</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="green">
			<!-- Logo Header -->
			<div class="logo-header">
				<div class="nav-item" style="position: absolute;" >
					<a href="#" class="logo">
						<img src="../assets/img/logojb.png" alt="navbar brand" class="navbar-brand" width="20%" height="20%">
						<span>My Inventory</span>
					</a>
				</div>
				
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
							<div>
								
							</div>
						</form>
					</div>
						<!-- nav notif -->
						<div>
							<ul class="navbar-nav flex-nowrap ms-auto">
    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
            <form class="me-auto navbar-search w-100">
                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                </div>
            </form>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
        <div class="nav-item dropdown no-arrow">
        	<a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
        		<span class="badge bg-danger badge-counter">3+</span>
        		<i class="fas fa-bell fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                <h6 class="dropdown-header">alerts center</h6>
                		<a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="me-3">
                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 12, 2019</span>
                        <p>A new monthly report is ready to download!</p>
                    </div>
                </a><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="me-3">
                        <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 7, 2019</span>
                        <p>$290.29 has been deposited into your account!</p>
                    </div>
                </a><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="me-3">
                        <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                    </div>
                    <div><span class="small text-gray-500">December 2, 2019</span>
                        <p>Spending Alert: We&#39;ve noticed unusually high spending for your account.</p>
                    </div>
                </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar4.jpeg" />
                        <div class="bg-success status-indicator"></div>
                    </div>
                    <div class="fw-bold">
                        <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I&#39;ve been having.</span></div>
                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                    </div>
                </a><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar2.jpeg" />
                        <div class="status-indicator"></div>
                    </div>
                    <div class="fw-bold">
                        <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                    </div>
                </a><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar3.jpeg" />
                        <div class="bg-warning status-indicator"></div>
                    </div>
                    <div class="fw-bold">
                        <div class="text-truncate"><span>Last month&#39;s report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                        <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                    </div>
                </a><a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar5.jpeg" />
                        <div class="bg-success status-indicator"></div>
                    </div>
                    <div class="fw-bold">
                        <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren&#39;t good...</span></div>
                        <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                    </div>
                </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </div>
        <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
    </li>
    <div class="d-none d-sm-block topbar-divider"></div>
    <li class="nav-item dropdown no-arrow">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="../assets/img/icon.png" /></a>
            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity log</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
            </div>
        </div>
    </li>
</ul>
						</div>
						<!-- end notif -->
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav">
						<li class="nav-item">
							<a href="?view=dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="?view=databarang">
											<span class="sub-item">Barang</span>
										</a>
									</li>
									<li>
										<a href="?view=dataruangan">
											<span class="sub-item">Ruangan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a href="?view=datapinjambarang">
								<i class="fas fa-briefcase"></i>
								<p>Pinjam Barang</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?view=datapinjamruangan">
								<i class="fas fa-briefcase"></i>
								<p>Pinjam Ruangan</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="../logout.php">
								<i class="fas fa-lock"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<?php
                    // Dashboard
                    if(@$_GET['view']=='')
                        include 'dashboard.php';
                    elseif($_GET['view']=='dashboard')
                        include 'dashboard.php';

                    // Data Barang
                    elseif($_GET['view']=='databarang')
                        include 'master/barang/databarang.php';
                    
                    // Data Ruangan
                    elseif($_GET['view']=='dataruangan')
                        include 'master/ruangan/dataruangan.php';

                    // Data Peminjaman
                    elseif($_GET['view']=='datapinjambarang')
                        include 'peminjaman/datapinjambarang.php';
                    elseif($_GET['view']=='detailpinjambarang')
                        include '../user/peminjaman/barang/detailpinjambarang.php';

                    elseif($_GET['view']=='datapinjamruangan')
                        include 'peminjaman/datapinjamruangan.php';
                    elseif($_GET['view']=='detailpinjamruangan')
                        include '../user/peminjaman/ruangan/detailpinjamruangan.php';
                 ?>
                 
		
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Azzara JS -->
	<script src="../assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script >
		$(document).ready(function() {
			$('#add-row').DataTable({
			});
		});
	</script>
</body>
</html>