<?php include 'session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Panel</title>
	<!-- core:css -->
	<link rel="stylesheet" href="admin_assets/assets/vendors/core/core.css">

	<!-- plugin css for this page -->
	<link rel="stylesheet" href="admin_assets/assets/vendors/select2/select2.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/dropzone/dropzone.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/dropify/dist/dropify.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
	<!-- end plugin cs
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

	<link rel="stylesheet" href="admin_assets/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="admin_assets/assets/css/demo_2/style.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="admin_assets/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="admin_assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="admin_assets/assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="admin_assets/assets/images/favicon.png" />

    <link rel="stylesheet" href="admin_assets/assets/vendors/core/core.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="admin_assets/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin_assets/assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="admin_assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- Layout styles -->  
  <link rel="stylesheet" href="admin_assets/assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="admin_assets/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="admin_movie.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="admin_price.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Price</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_date.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Date</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_time.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Time</span>
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
   
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<form action="logout.php" method="POST">
												<input type="submit" value="Log Out" name="logout" class="btn btn-danger">
												</form>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->