
<?php

include_once("config.php");

 ?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img\fav.png">

		<!-- Title -->
		<title>صندوق البسقلون  </title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css\bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts\style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css\main.css">

   <link rel="stylesheet" href="css/toastr.min.css">
		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor\daterange\daterange.css">

		<!-- Chartist css -->
		<link rel="stylesheet" href="vendor\chartist\css\chartist.min.css">
		<link rel="stylesheet" href="vendor\chartist\css\chartist-custom.css">
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor\daterange\daterange.css">

		<!-- Datepicker css -->
		<link rel="stylesheet" href="vendor\datepicker\css\classic.css">
		<link rel="stylesheet" href="vendor\datepicker\css\classic.date.css">


	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- *************
			************ Header section start *************
		************* -->

		<!-- Header start -->
		<header class="header">
			<div class="logo-wrapper">
				<a href="index.html" class="logo">
					<img src="img\logo.png" alt="Wafi Admin Dashboard">
				</a>
				<a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick Links">
					<i class="icon-menu1"></i>
				</a>
			</div>
			<div class="header-items">
				<!-- Custom search start -->
				<div class="custom-search">
					<input type="text" class="search-query" placeholder="ابحث....">
					<i class="icon-search1"></i>
				</div>
				<!-- Custom search end -->

				<!-- Header actions start -->
				<ul class="header-actions">

					<li class="dropdown">
						<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
							<i class="icon-bell"></i>
							<span class="count-label">8</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
							<div class="dropdown-menu-header">
								Notifications (40)
							</div>
							<ul class="header-notifications">
								<li>
									<a href="#">
										<div class="user-img away">
											<img src="img\user21.png" alt="User">
										</div>
										<div class="details">
											<div class="user-title">Abbott</div>
											<div class="noti-details">Membership has been ended.</div>
											<div class="noti-date">Oct 20, 07:30 pm</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="user-img busy">
											<img src="img\user10.png" alt="User">
										</div>
										<div class="details">
											<div class="user-title">Braxten</div>
											<div class="noti-details">Approved new design.</div>
											<div class="noti-date">Oct 10, 12:00 am</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="user-img online">
											<img src="img\user6.png" alt="User">
										</div>
										<div class="details">
											<div class="user-title">Larkyn</div>
											<div class="noti-details">Check out every table in detail.</div>
											<div class="noti-date">Oct 15, 04:00 pm</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
							<span class="user-name">خطيب لطفى</span>
							<span class="avatar">ادمن<span class="status busy"></span></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
							<div class="header-profile-actions">
								<div class="header-user-profile">
									<div class="header-user">
										<img src="img\user.png" alt="Admin Template">
									</div>
									<h5>خطيب لطفى</h5>
									<p>Admin</p>
								</div>
								<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
								<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
								<a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
							<i class="icon-list"></i>
						</a>
					</li>
				</ul>
				<!-- Header actions end -->
			</div>
		</header>
		<!-- Header end -->

		<!-- Screen overlay start -->
		<div class="screen-overlay"></div>
		<!-- Screen overlay end -->


		<!-- Quick settings start -->
		<div class="quick-settings-box">
			<div class="quick-settings-header">
				<div class="date-container">Today <span class="date" id="today-date"></span></div>
				<a href="#" class="quick-settings-box-close">
					<i class="icon-circle-with-cross"></i>
				</a>
			</div>
			<div class="quick-settings-body">
				<div class="fullHeight">
					<div class="quick-setting-list">
						<h6 class="title">Events</h6>
						<ul class="list-items">
							<li>
								<div class="list-title">Product Launch</div>
								<div class="list-location">10:00 AM</div>
							</li>
							<li>
								<div class="list-title">Team Meeting</div>
								<div class="list-location">01:30 PM</div>
							</li>
							<li>
								<div class="list-title">Q&A Session</div>
								<div class="list-location">02:30 PM</div>
							</li>
						</ul>
					</div>
					<div class="quick-setting-list">
						<h6 class="title">Notes</h6>
						<ul class="list-items">
							<li>
								<div class="list-title">Refreshing the list</div>
								<div class="list-location">03:15 PM</div>
							</li>
							<li>
								<div class="list-title">Not able to click on button</div>
								<div class="list-location">03:18 PM</div>
							</li>
						</ul>
					</div>
					<div class="quick-setting-list">
						<h6 class="title">Quick Settings</h6>
						<ul class="set-priority-list">
							<li>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" checked="" id="systemUpdates">
									<label class="custom-control-label" for="systemUpdates">System Updates</label>
								</div>
							</li>
							<li>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="noti">
									<label class="custom-control-label" for="noti">Notifications</label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Quick settings end -->

		<!-- *************
			************ Header section end *************
		************* -->

		 <!-- Container fluid start -->
		 <div class="container-fluid">

		   <!-- Navigation start -->
		   <nav class="navbar navbar-expand-lg custom-navbar">
		     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
		       <span class="navbar-toggler-icon">
		         <i></i>
		         <i></i>
		         <i></i>
		       </span>
		     </button>
		     <div class="collapse navbar-collapse" id="WafiAdminNavbar">
		       <ul class="navbar-nav">
		         <li class="nav-item dropdown">
		           <a class="nav-link dropdown-toggle " href="index.php" id="dashboardsDropdown">
		             <i class="icon-devices_other nav-icon"></i>
		             لوحة التحكم
		           </a>

		         </li>
		         <li class="nav-item dropdown">
		           <a class="nav-link dropdown-toggle " href="Families.php" id="appsDropdown">
		             <i class="icon-package nav-icon"></i>
		             العائلات
		           </a>
		       </li>


		           </ul>
		         </li>


		     </div>
		   </nav>
		   <!-- Navigation end -->

		   <!-- *************
		     ************ Main container start *************
		   ************* -->
		   <div class="main-container">

		     <!-- Page header start -->
		     <div class="page-header">
		       <ol class="breadcrumb">
		         <li class="breadcrumb-item">الرئيسية</li>
		         <li class="breadcrumb-item active">لوحة التحكم</li>
		       </ol>

		       <ul class="app-actions">
		         <li>
		           <a href="#" id="reportrange">
		             <span class="range-text"></span>
		             <i class="icon-chevron-down"></i>
		           </a>
		         </li>
		         <li>
		           <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
		             <i class="icon-print"></i>
		           </a>
		         </li>
		         <li>
		           <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
		             <i class="icon-cloud_download"></i>
		           </a>
		         </li>
		       </ul>
		     </div>
		     <!-- Page header end -->

		     <!-- Content wrapper start -->
		     <div class="content-wrapper">
