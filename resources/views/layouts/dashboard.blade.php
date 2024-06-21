<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Documentation - Arise Admin Template</title>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Prism CSS -->
		<link rel="stylesheet" href="assets/css/prism/prism.css">

		<!-- Main CSS -->
		<link id="theme-style" rel="stylesheet" href="assets/css/main.css">

	</head>

	<body>


		<!-- Document header start -->
		<div id="document-header" class="document-header">
			<h2 class="document-title">Arise Admin Dashbaord</h2>
			<div class="last-update">Last updated: September, 2023</div>
		</div>
		<!-- Document header end -->

		<div class="container">

			<!-- Document container start -->
			<div class="document-container">

				<!-- Document body start -->
				<div class="document-body">

					<!-- Document nav start -->
					<div id="document-nav" class="document-nav">
						<nav id="document-menu" class="nav document-menu sticky">
							<a class="nav-link scrollto" href="#welcome-section">Introduction</a>
							<a class="nav-link scrollto" href="#html-section">HTML structure</a>
							<a class="nav-link scrollto" href="#css-files">CSS files</a>
							<a class="nav-link scrollto" href="#images">Images</a>
							<a class="nav-link scrollto" href="#fonts">Fonts</a>
							<a class="nav-link scrollto" href="#credits">Credits</a>
							<a class="nav-link scrollto" href="#jquery-files">jQuery files</a>
							<a class="nav-link scrollto" href="#special-thanks">Special thanks</a>
						</nav>
					</div>
					<!-- Document nav end -->

					<!-- Document sections start -->
					<div class="document-sections-container">


						<!-- Sectioon start -->
						<section id="welcome-section" class="document-section">
							<h2>Welcome!</h2>
							<div id="step1" class="document-section-body">
								<h3>Introduction</h3>
								<p class="mb-5 mt-5">
									<b>Item Name: </b> Arise Admin Template<br>
									<b>Author: </b> Srinu<br>
									<b>Version: </b> v1.0<br>
								</p>
								<p>Thank you for your interest in <b>Arise Admin Template</b>. This documentation is to help you
									regarding each step of customization and get you started. Please go through the documentation
									carefully to understand how this template is made and how to edit this properly. HTML5, CSS3 knowledge
									is required to customize this template.
								</p>

							</div>
						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="html-section" class="document-section">
							<h3 class="m-0">Folder and Files structure</h3>

							<div class="document-section-body">
								<div class="file-structure">
									<img src="assets/images/file-structure.svg" class="img-fluid" alt="File Structure" />
								</div>
							</div>

						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="html-section" class="document-section">
							<h3 class="m-0">HTML layout structure</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
	&lt;head&gt;
		&lt;!-- Required meta tags --&gt;
		&lt;meta charset="utf-8"&gt;
		&lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;

		&lt;!-- Meta --&gt;
		&lt;meta name="description" content="Responsive Bootstrap 5 Dashboard Template"&gt;
		&lt;meta name="author" content="Srinu"&gt;
		&lt;link rel="shortcut icon" href="assets/images/fav.svg"&gt;

		&lt;!-- Title --&gt;
		&lt;title&gt;Arise Admin Template - Admin Dashboard&lt;/title&gt;


		&lt;!-- *************
			************ Required Css Files *************
		************ --&gt;
		&lt;!-- Bootstrap css --&gt;
		&lt;link rel="stylesheet" href="assets/css/bootstrap.min.css"&gt;

		&lt;!-- Animated css --&gt;
		&lt;link rel="stylesheet" href="assets/css/animate.css"&gt;

		&lt;!-- Bootstrap font icons css --&gt;
		&lt;link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css"&gt;

		&lt;!-- Main css --&gt;
		&lt;link rel="stylesheet" href="assets/css/main.css"&gt;


		&lt;!-- *************
			************ Vendor Css Files *************
		************ --&gt;

		&lt;!-- Scrollbar CSS --&gt;
		&lt;link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css"&gt;

	&lt;/head&gt;
	&lt;body&gt;

		&lt;!-- Loading wrapper start --&gt;
		&lt;div id="loading-wrapper"&gt;
			&lt;div class="spinner"&gt;
				&lt;div class="line1"&gt;&lt;/div&gt;
				&lt;div class="line2"&gt;&lt;/div&gt;
				&lt;div class="line3"&gt;&lt;/div&gt;
				&lt;div class="line4"&gt;&lt;/div&gt;
				&lt;div class="line5"&gt;&lt;/div&gt;
				&lt;div class="line6"&gt;&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;!-- Loading wrapper end --&gt;

		&lt;!-- Page wrapper start --&gt;
		&lt;div class="page-wrapper"&gt;

			&lt;!-- Sidebar wrapper start --&gt;
			&lt;nav class="sidebar-wrapper"&gt;

				&lt;!-- Sidebar brand starts --&gt;
				&lt;div class="sidebar-brand"&gt;
					&lt;a href="#" class="logo"&gt;
						&lt;img src="assets/images/logo.svg" alt="Admin Dashboards" /&gt;
					&lt;/a&gt;
				&lt;/div&gt;
				&lt;!-- Sidebar brand starts --&gt;

				&lt;!-- Sidebar menu starts --&gt;
				&lt;div class="sidebar-menu"&gt;
					&lt;div class="sidebarMenuScroll"&gt;
						&lt;ul&gt;
							&lt;li class="sidebar-dropdown"&gt;
								&lt;a href="#"&gt;
									&lt;i class="bi bi-house"&gt;&lt;/i&gt;
									&lt;span class="menu-text"&gt;Dashboards&lt;/span&gt;
								&lt;/a&gt;
								&lt;div class="sidebar-submenu"&gt;
									&lt;ul&gt;
										&lt;li&gt;
											&lt;a href="#"&gt;Link&lt;/a&gt;
										&lt;/li&gt;
										&lt;li&gt;
											&lt;a href="#"&gt;Link&lt;/a&gt;
										&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/div&gt;
							&lt;/li&gt;
							&lt;li&gt;
								&lt;a href="#"&gt;
									&lt;i class="bi bi-hand-index-thumb"&gt;&lt;/i&gt;
									&lt;span class="menu-text"&gt;Link&lt;/span&gt;
								&lt;/a&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;!-- Sidebar menu ends --&gt;

			&lt;/nav&gt;
			&lt;!-- Sidebar wrapper end --&gt;

			&lt;!-- *************
				************ Main container start *************
			************* --&gt;
			&lt;div class="main-container"&gt;

				&lt;!-- Page header starts --&gt;
				&lt;div class="page-header"&gt;

					&lt;div class="toggle-sidebar" id="toggle-sidebar"&gt;&lt;i class="bi bi-list"&gt;&lt;/i&gt;&lt;/div&gt;

					&lt;!-- Breadcrumb start --&gt;
					&lt;ol class="breadcrumb"&gt;
						&lt;li class="breadcrumb-item"&gt;
							&lt;i class="bi bi-house"&gt;&lt;/i&gt;
							&lt;a href="#"&gt;Home&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="breadcrumb-item"&gt;Layouts&lt;/li&gt;
						&lt;li class="breadcrumb-item breadcrumb-active" aria-current="page"&gt;Grid Layout&lt;/li&gt;
					&lt;/ol&gt;
					&lt;!-- Breadcrumb end --&gt;

					&lt;!-- Header actions ccontainer start --&gt;
					&lt;div class="header-actions-container"&gt;

						&lt;!-- Search container start --&gt;
						&lt;div class="search-container"&gt;

							&lt;!-- Search input group start --&gt;
							&lt;div class="input-group"&gt;
								&lt;input type="text" class="form-control" placeholder="Search anything"&gt;
								&lt;button class="btn" type="button"&gt;
									&lt;i class="bi bi-search"&gt;&lt;/i&gt;
								&lt;/button&gt;
							&lt;/div&gt;
							&lt;!-- Search input group end --&gt;

						&lt;/div&gt;
						&lt;!-- Search container end --&gt;

						&lt;!-- Leads start --&gt;
						&lt;a href="#" class="leads d-none d-xl-flex"&gt;
							&lt;div class="lead-details"&gt;You have &lt;span class="count"&gt; 21 &lt;/span&gt; new leads &lt;/div&gt;
							&lt;span class="lead-icon"&gt;&lt;i class="bi bi-bell-fill animate__animated animate__swing animate__infinite infinite"&gt;&lt;/i&gt;&lt;b class="dot animate__animated animate__heartBeat animate__infinite"&gt;&lt;/b&gt;&lt;/span&gt;
						&lt;/a&gt;
						&lt;!-- Leads end --&gt;

						&lt;!-- Header actions start --&gt;
						&lt;ul class="header-actions"&gt;
							&lt;li class="dropdown d-none d-md-block"&gt;
								&lt;a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true"&gt;
									&lt;img src="assets/images/flags/1x1/gb.svg" class="flag-img" alt="Great Britain"&gt;
								&lt;/a&gt;
								&lt;div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries"&gt;
									&lt;div class="country-container"&gt;
										&lt;a href="#"&gt;
											&lt;img src="assets/images/flags/1x1/us.svg" alt="USA"&gt;
										&lt;/a&gt;
										&lt;a href="#"&gt;
											&lt;img src="assets/images/flags/1x1/in.svg" alt="India"&gt;
										&lt;/a&gt;
										&lt;a href="#"&gt;
											&lt;img src="assets/images/flags/1x1/br.svg" alt="Brazil"&gt;
										&lt;/a&gt;
										&lt;a href="#"&gt;
											&lt;img src="assets/images/flags/1x1/tr.svg" alt="Turkey"&gt;
										&lt;/a&gt;
										&lt;a href="#"&gt;
											&lt;img src="assets/images/flags/1x1/ca.svg" alt="Canada"&gt;
										&lt;/a&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/li&gt;
							&lt;li class="dropdown"&gt;
								&lt;a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true"&gt;
									&lt;span class="user-name d-none d-md-block"&gt;User Name&lt;/span&gt;
									&lt;span class="avatar"&gt;
										&lt;img src="assets/images/user.png" alt="Admin Templates"&gt;
										&lt;span class="status online"&gt;&lt;/span&gt;
									&lt;/span&gt;
								&lt;/a&gt;
								&lt;div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings"&gt;
									&lt;div class="header-profile-actions"&gt;
										&lt;a href="#"&gt;Link&lt;/a&gt;
										&lt;a href="#"&gt;Link&lt;/a&gt;
										&lt;a href="#"&gt;Link&lt;/a&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
						&lt;!-- Header actions end --&gt;

					&lt;/div&gt;
					&lt;!-- Header actions ccontainer end --&gt;

				&lt;/div&gt;
				&lt;!-- Page header ends --&gt;

				&lt;!-- Content wrapper scroll start --&gt;
				&lt;div class="content-wrapper-scroll"&gt;

					&lt;!-- Content wrapper start --&gt;
					&lt;div class="content-wrapper"&gt;

						&lt;!-- Row start --&gt;
						&lt;div class="row"&gt;
							&lt;div class="col-12"&gt;
								&lt;div class="card"&gt;
									&lt;div class="card-body"&gt;
										&lt;div class="card-320"&gt;&lt;/div&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/div&gt;
						&lt;/div&gt;
						&lt;!-- Row end --&gt;

					&lt;/div&gt;
					&lt;!-- Content wrapper end --&gt;

					&lt;!-- App Footer start --&gt;
					&lt;div class="app-footer"&gt;
						&lt;span&gt;© Arise admin 2022&lt;/span&gt;
					&lt;/div&gt;
					&lt;!-- App footer end --&gt;

				&lt;/div&gt;
				&lt;!-- Content wrapper scroll end --&gt;

			&lt;/div&gt;
			&lt;!-- *************
				************ Main container end *************
			************* --&gt;

		&lt;/div&gt;
		&lt;!-- Page wrapper end --&gt;

		&lt;!-- *************
			************ Required JavaScript Files *************
		************* --&gt;
		&lt;!-- Required jQuery first, then Bootstrap Bundle JS --&gt;
		&lt;script src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
		&lt;script src="assets/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
		&lt;script src="assets/js/modernizr.js"&gt;&lt;/script&gt;
		&lt;script src="assets/js/moment.js"&gt;&lt;/script&gt;

		&lt;!-- *************
			************ Vendor Js Files *************
		************* --&gt;

		&lt;!-- Overlay Scroll JS --&gt;
		&lt;script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"&gt;&lt;/script&gt;
		&lt;script src="assets/vendor/overlay-scroll/custom-scrollbar.js"&gt;&lt;/script&gt;


		&lt;!-- Main Js Required --&gt;
		&lt;script src="assets/js/main.js"&gt;&lt;/script&gt;

	&lt;/body&gt;
&lt;/html&gt;</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="css-files" class="document-section">
							<h3 class="m-0">CSS files</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">Note:
- All common css files are included in css folder.
- All plugin css files are included in vendor folder.


&lt;!-- *************
	************ Required Css Files *************
************ --&gt;
&lt;!-- Bootstrap css --&gt;
&lt;link rel="stylesheet" href="assets/css/bootstrap.min.css"&gt;

&lt;!-- Animated css --&gt;
&lt;link rel="stylesheet" href="assets/css/animate.css"&gt;

&lt;!-- Bootstrap font icons css --&gt;
&lt;link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css"&gt;

&lt;!-- Main css --&gt;
&lt;link rel="stylesheet" href="assets/css/main.css"&gt;

&lt;!-- *************
	************ Optional Vendor Css Files
		- Include below css files based on your requirment.
		- Included all css files in vendor folder.
	*************
************ --&gt;
&lt;!-- Bootstrap Select CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/bs-select/bs-select.css" /&gt;

&lt;!-- Calendar CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/calendar/css/custom.css" /&gt;
&lt;link rel="stylesheet" href="assets/vendor/calendar/css/main.min.css" /&gt;

&lt;!-- Data Tables CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" /&gt;
&lt;link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" /&gt;

&lt;!-- Daterange CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/daterange/daterange.css"&gt;

&lt;!-- Dropzone CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/dropzone/dropzone.min.css"&gt;

&lt;!-- Mega Menu --&gt;
&lt;link rel="stylesheet" href="assets/vendor/megamenu/css/megamenu.css"&gt;

&lt;!-- Morris CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/morris/morris.css" /&gt;

&lt;!-- Particles CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/circliful/circliful.css" /&gt;

&lt;!-- Scrollbar CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css"&gt;

&lt;!-- Summernote CSS --&gt;
&lt;link rel="stylesheet" href="assets/vendor/summernote/summernote-bs4.css" /&gt;</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="images" class="document-section">
							<h3 class="m-0">Images</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">Note:
- All image placeholders are included in images folder.
- Country Flags SVG images are included in flags folder.
- Images which are used in the live demo are not included in the download folder.
- Please replace the images as per your requirement.
</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="fonts" class="document-section">
							<h3 class="m-0">Fonts</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">Note:
- Font icons files are included in fonts folder.
- Lato is the primary font and Merriweather is the secondary font used in Arise Admin Dashboard.</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->

						<!-- Sectioon start -->
						<section id="credits" class="document-section">
							<h3 class="m-0">Credits</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">JavaScript Libraries
---------------------
--------------------
-------------------
------------------

Bootstrap 5
https://getbootstrap.com/

jQuery
http://www.jquery.com

jQuery-UI
http://www.jqueryui.com


JavaScript Plugins
---------------------
--------------------
-------------------
------------------

Apex Graphs
https://apexcharts.com/

Bootstrap-select
https://developer.snapappointments.com/bootstrap-select

Circliful
https://github.com/pguso/jquery-plugin-circliful

DataTables
http://datatables.net/

Daterange
https://github.com/dangrossman/daterangepicker

dropzone
https://www.dropzonejs.com

FullCalendar
https://fullcalendar.io/

Input Masks
https://github.com/nosir/cleave.js

jVector Maps
http://jvectormap.com

Moment
http://momentjs.com/

Morris
https://morrisjs.github.io/morris.js

Particles
vincentgarreau.com/particles.js

Rating
https://www.wbotelhos.com/raty

Overlay Scroll
https://github.com/KingSora/OverlayScrollbars

Summernote Editor
https://summernote.org




CSS Files
---------------------
--------------------
-------------------
------------------

Bootstrap
http://getbootstrap.com

Bootstrap Select
https://developer.snapappointments.com/bootstrap-select

Circliful
https://github.com/pguso/jquery-plugin-circliful

Calendar
https://plugins.jquery.com/fullcalendar

Data Tables
https://datatables.net

Icomoon Icons
https://icomoon.io/

jQuery UI
https://jqueryui.com

Summernote Editor
https://summernote.org




Images
---------------------
--------------------
-------------------
------------------

Pexels
https://pexels.com





Fonts
---------------------
--------------------
-------------------
------------------

Icon Font
https://icomoon.io

Web Fonts
https://fonts.google.com/
Merriweather and Lato

</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->


						<!-- Sectioon start -->
						<section id="jquery-files" class="document-section">
							<h3 class="m-0">jQuery files</h3>

							<div class="document-section-body">
								<div class="code-block">
									<pre><code class="language-markup">Note:
- All common js files are included in js folder.
- All plugins js files are included in vendor folder.


&lt;!-- *************
	************ Required JavaScript Files *************
************* --&gt;
&lt;!-- Required jQuery first, then Bootstrap Bundle JS --&gt;
&lt;script src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/js/moment.js"&gt;&lt;/script&gt;


&lt;!-- *************
	************ Required Vendor Js Files *************
************* --&gt;
&lt;!-- Overlay Scroll JS --&gt;
&lt;script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/vendor/overlay-scroll/custom-scrollbar.js"&gt;&lt;/script&gt;


&lt;!-- *************
	************ Optional Vendor Js Files
	- Include below js files based on your requirment.
	- Included all optional js files in vendor folder.
	*************
************* --&gt;
&lt;!-- Apex Charts --&gt;
&lt;script src="assets/vendor/apex/apexcharts.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/apex

&lt;!-- Bootstrap Select JS --&gt;
&lt;script src="assets/vendor/bs-select/bs-select.min.js"&gt;&lt;/script&gt;
	--- more Bootstrap select js files are included in design/vendor/bs-select

&lt;!-- Circliful js --&gt;
&lt;script src="assets/vendor/circliful/circliful.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/circliful

&lt;!-- Data Tables --&gt;
&lt;script src="assets/vendor/datatables/dataTables.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/vendor/datatables/dataTables.bootstrap.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/datatables

&lt;!-- Datepickers --&gt;
&lt;script src="assets/vendor/datepicker/js/picker.js"&gt;&lt;/script&gt;
&lt;script src="assets/vendor/datepicker/js/picker.date.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/datepicker

&lt;!-- Daterange --&gt;
&lt;script src="assets/vendor/daterange/daterange.js"&gt;&lt;/script&gt;
&lt;script src="assets/vendor/daterange/custom-daterange.js"&gt;&lt;/script&gt;

&lt;!-- Fullcalendar --&gt;
&lt;script src="assets/vendor/calendar/js/core/main.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/calendar

&lt;!-- Input Masks JS --&gt;
&lt;script src="assets/vendor/input-masks/cleave.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/input-masks

&lt;!-- jQuery UI --&gt;
&lt;script src="assets/js/jquery-ui.min.js"&gt;&lt;/script&gt;

&lt;!-- jVector Maps --&gt;
&lt;script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/jvectormap

&lt;!-- Morris Graphs --&gt;
&lt;script src="assets/vendor/morris/raphael-min.js"&gt;&lt;/script&gt;
&lt;script src="assets/vendor/morris/morris.min.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/morris

&lt;!-- Rating JS --&gt;
&lt;script src="assets/vendor/rating/raty.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/rating

&lt;!-- Summernote JS --&gt;
&lt;script src="assets/vendor/summernote/summernote-bs4.js"&gt;&lt;/script&gt;
	--- more apex js files are included in design/vendor/summernote

&lt;!-- Main Js Required --&gt;
	--- All layout related js files are included in main.js
&lt;script src="assets/js/main.js"&gt;&lt;/script&gt;</code></pre>
								</div>
							</div>
						</section>
						<!-- Sectioon end -->


						<!-- Sectioon start -->
						<section id="special-thanks" class="document-section">
							<h3 class="m-0">Special Thanks</h3>

							<div class="document-section-body">
								<div class="code-block">
									Thank you so much for purchasing this theme.<br />
								</div>
							</div>
						</section>
						<!-- Sectioon end -->

					</div>
					<!-- Document sections end -->

				</div>
				<!-- Document body end -->

			</div>
			<!-- Document container end -->

		</div>
		<!-- Container end -->

		<!-- Main Javascript -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="assets/js/stickyfill/stickyfill.min.js"></script>
		<script type="text/javascript" src="assets/js/scroll-to/jquery.scrollTo.min.js"></script>
		<script type="text/javascript" src="assets/js/prism/prism-min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>

	</body>

</html>
