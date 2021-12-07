<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<title>Medicing Client Dashboard</title>
	<link rel="stylesheet" href="<?php echo base_url('/css/client-dashboardStyles.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/css/tableStyles.css'); ?>">

	<!-- Boxicons CDN Link -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class='bx bx-health'></i>
			<span class="logo_name">Medicing</span><br>

		</div>
		<ul class="nav-links">
			<li>
				<a href="<?= site_url("clientDashboard"); ?>" class="active">
					<i class='bx bx-grid-alt'></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-history'></i>
					<span class="links_name">Leave History</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-calendar' undefined></i>
					<span class="links_name">My Holidays</span>
				</a>
			</li>
			<li>
				<a href="<?= site_url("calendar"); ?>">
					<i class='bx bx-box'></i>
					<span class="links_name">calendar</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-timer'></i>
					<span class="links_name">Upcoming Events</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-pie-chart-alt-2'></i>
					<span class="links_name">Analytics</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-message'></i>
					<span class="links_name">Messages</span>
				</a>
			</li>
			<li>
				<a href="https://mail.google.com/mail/u/0/#inbox">
					<i class='bx bx-mail-send'></i>
					<span class="links_name">Email</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-heart'></i>
					<span class="links_name">Leave Tips</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-cog'></i>
					<span class="links_name">Settings</span>
				</a>
			</li> -->
			<li class="log_out">
				<a href="<?= site_url("userlogin/logout"); ?>">
					<i class='bx bx-log-out'></i>
					<span class="links_name">Logout</span>
				</a>
			</li>
		</ul>
	</div>

	<section class="home-section">
		<nav id="">
			<div class="sidebar-button">
				<i class='bx bx-menu sidebarBtn'></i>
				<span class="dashboard">Easy Leave</span>
			</div>
			<div class="search-box">
				<input type="text" placeholder="Search...">
				<i class='bx bx-search'></i>
			</div>
			<div class="profile-details">
				<img src="<?php echo base_url('images/me.jpg') ?>" alt="">
				<?php if (session()->get('userName')) : ?>

					<span class="admin_name">
						<?php
						$session = session();
						echo $session->get('userName');
						?> </span>

				<?php else : ?>
					<span class="admin_name">User Name</span>

				<?php endif; ?>
				<i class='bx bx-chevron-down'></i>
			</div>
		</nav>
		<!-- home-section content and footer after-->