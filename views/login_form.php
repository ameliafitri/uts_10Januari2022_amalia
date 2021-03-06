<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forms | Atlantis Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<link href="../assets/styles.css" rel="stylesheet" />
	<link href="../assets/prism.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="light-blue2">
				<a href="../index.html" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a href="../../examples/demo1" class="nav-link">
								Live Preview
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-info">
						<li class="nav-item">
							<a href="../index.html">
								<i class="fas fa-home"></i>
								<p>Introduction</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="../components/alerts.html">
								<span class="letter-icon">A</span>
								<p>Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/avatars.html">
								<span class="letter-icon">Av</span>
								<p>Avatars</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/badge.html">
								<span class="letter-icon">Ba</span>
								<p>Badge</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/breadcrumb.html">
								<span class="letter-icon">Bc</span>
								<p>Breadcrumb</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/buttons.html">
								<span class="letter-icon">Bt</span>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/card.html">
								<span class="letter-icon">C</span>
								<p>Card</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/collapse.html">
								<span class="letter-icon">Co</span>
								<p>Collapse</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/colors.html">
								<span class="letter-icon">Cl</span>
								<p>Colors</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/dropdowns.html">
								<span class="letter-icon">D</span>
								<p>Dropdowns</p>
							</a>
						</li>
						<li class="nav-item active">
							<a href="../components/forms.html">
								<span class="letter-icon">F</span>
								<p>Forms</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="../components/layoutsbackground.html">
							<span class="letter-icon">L</span>
							<p>Layouts Background</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="../components/loaders.html">
							<span class="letter-icon">Lo</span>
							<p>Loaders</p>
						</a>
					</li>
						<li class="nav-item">
							<a href="../components/modal.html">
								<span class="letter-icon">M</span>
								<p>Modal</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/navs.html">
								<span class="letter-icon">N</span>
								<p>Navs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/navbar.html">
								<span class="letter-icon">Nb</span>
								<p>Navbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/pagination.html">
								<span class="letter-icon">Pa</span>
								<p>Pagination</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/popovers.html">
								<span class="letter-icon">Po</span>
								<p>Popovers</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/progress.html">
								<span class="letter-icon">Pr</span>
								<p>Progress</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="../components/tables.html">
								<span class="letter-icon">T</span>
								<p>Tables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/tooltips.html">
								<span class="letter-icon">To</span>
								<p>Tooltips</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/typography.html">
								<span class="letter-icon">Ty</span>
								<p>Typography</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Plugins</h4>
						</li>
						<li class="nav-item">
							<a href="../plugins/chart.html">
								<span class="letter-icon">C</span>
								<p>Chart.js</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/chartcircle.html">
								<span class="letter-icon">Cc</span>
								<p>Chart Circle</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/animate.html">
								<span class="letter-icon">Cs</span>
								<p>CSS Animate</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/datatables.html">
								<span class="letter-icon">Da</span>
								<p>Datatables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/jqvmap.html">
								<span class="letter-icon">Jm</span>
								<p>JQVmap</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/scrollbar.html">
								<span class="letter-icon">Js</span>
								<p>Jquery Scrollbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/notify.html">
								<span class="letter-icon">N</span>
								<p>Notify</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/slider.html">
								<span class="letter-icon">Sl</span>
								<p>Slider</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/sweetalert.html">
								<span class="letter-icon">Sa</span>
								<p>Sweet Alert</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/sparkline.html">
								<span class="letter-icon">Sp</span>
								<p>Sparkline</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-info-gradient text-white bubble-shadow">
							<h4>Forms</h4>
							<p class="mb-0 op-8">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
						</div>
						<div class="card-body">
							<div class="table-content">
								<span class="title">Table of Content</span>
								<ul>
									<li>
										<a href="#overview">Overview</a>
									</li>
									<li>
										<a href="#formcontrols">Form Controls</a>
									</li>
									<li>
										<a href="#examples">
											Examples
										</a>
										<ol>
											<li>
												<a href="#states">States</a>
											</li>
											<li>
												<a href="#inputicon">
													Input with Icon
												</a>
											</li>
											<li>
												<a href="#forminputstyles">Form Control Styles</a>
											</li>
											<li>
												<a href="#formgroupstyles">Form Group Styles</a>
											</li>
										</ol>
									</li>
									<li>
										<a href="#inputgroup">Input Group</a>
									</li>
									<li>
										<a href="#imagecheck">Image Check</a>
									</li>
									<li>
										<a href="#colorinput">Color Input</a>
									</li>
									<li>
										<a href="#selectgroup">Select Group</a>
									</li>
								</ul>
							</div>
							<h4 class="subcontent-title" id="overview"><span>Overview</span></h4>
							<p>Be sure to use an appropriate <code class="highlighter-rouge">type</code> attribute on all inputs (e.g., <code class="highlighter-rouge">email</code> for email address or <code class="highlighter-rouge">number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</p>
							<p>Here???s a quick example to demonstrate Bootstrap???s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
							<div class="bd-example">
							<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container">
		<h1>Login</h1>
		<p>Masuk ke Dashboard</p>

		<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

		<form action="" method="post" style="max-width: 600px;">
			<div>
				<label for="name">Email/Username*</label>
				<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
					placeholder="Your username or email" value="<?= set_value('username') ?>" required />
				<div class="invalid-feedback">
					<?= form_error('username') ?>
				</div>
			</div>
			<div>
				<label for="password">Password*</label>
				<input type="password" name="katakunci" class="<?= form_error('katakunci') ? 'invalid' : '' ?>"
					placeholder="Enter your password" value="<?= set_value('katakunci') ?>" required />
				<div class="invalid-feedback">
					<?= form_error('password') ?>
				</div>
			</div>

			<div>
				<input type="submit" class="button button-primary" value="Login">
			</div>
		</form>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
<style>
    form {
	box-sizing: border-box;
	display:flex;
	flex-direction: column;
	gap: 1rem;
	margin: 2em 0;
}
label {
	display: inline-block;
	margin-bottom: 0.5rem;
}
input, textarea {
	display: inline-block;
	padding: 0.5rem;
	width: 100%;
}
input:focus, textarea:focus {
	outline-color: dodgerblue;
}

.invalid {
	border: 2px solid rgb(153, 16, 16);
}

.invalid::placeholder {
	color: rgb(153, 16, 16);
}

.invalid-feedback:empty {
	display: none;
}
.invalid-feedback {
	font-size: smaller;
	color: rgb(153, 16, 16);
}

/* Button */
.button {
	background-color: #e7e7e7;
	border: 2px solid transparent;
	border-radius: 8px;
	color: black;
	padding: 8px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 1rem;
	font-family: sans-serif;
}

.button:hover {
	opacity: 0.8;
}

.button:active {
	border: 2px solid rgba(0, 0, 0, 0.5);
}

.button-success {
	background-color: #4caf50;
	color: white;
}
.button-primary {
	background-color: #008cba;
	color: white;
}
.button-danger {
	background-color: #f44336;
	color: white;
}

.button-small {
	font-size: 0.7rem;
}
</style>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>
<script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>
<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../assets/js/atlantis.min.js"></script>
<script src="../assets/prism.js"></script>
<script src="../assets/prism-normalize-whitespace.min.js"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
</html>