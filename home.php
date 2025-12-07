<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>DraleonX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/athena2.png">

		<style>
			/* ---- Background Video ---- */
			#bg-video {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				object-fit: cover;
				z-index: -2;
			}

			#overlay-dark {
				position: fixed;
				top: 0; left: 0;
				width: 100%;
				height: 100%;
				background: rgba(0,0,0,0.50);
				z-index: -1;
			}

			/* Tombol Logout */
			.logout-btn {
				position: fixed;
				top: 20px;
				right: 20px;
				background: #ff4747;
				padding: 10px 20px;
				border-radius: 5px;
				color: white !important;
				text-decoration: none;
				font-weight: 600;
				transition: 0.3s;
				z-index: 1000;
			}

			.logout-btn:hover {
				background: #e02828;
			}

			/* Nama User */
			#welcome-text {
				position: fixed;
				top: 20px;
				left: 20px;
				color: #fff;
				font-size: 1.2rem;
				font-weight: 600;
				z-index: 1000;
			}


		</style>

	</head>
	<body class="is-preload">

		<video id="bg-video" autoplay muted loop playsinline preload="auto">
  <source src="video/bumi.mp4" type="video/mp4" />
</video>
<div id="overlay-dark"></div>


		<!-- Welcome username -->
		<div id="welcome-text">
			Selamat Datang, <?php echo ucwords($_SESSION['user']); ?>!
		</div>

		<!-- Logout -->
		<a href="logout.php" class="logout-btn">Logout</a>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
    <img src="assets/img/athena2.png" alt="Logo" style="width:80px;">
</div>

						<div class="content">
							<div class="inner">
								<h1>Selamat Datang</h1>
								<p>Ada apa sebenarnya, siapa anda, siapa saya</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Kontak</a></li>
								<li><a href="#Job">Job</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/sun.jpg" alt="" /></span>
								<p>
									Halaman ini adalah landing page yang muncul setelah login.
								</p>
							</article>

						<!-- Job -->
							<article id="Job">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="images/iday.jpg" alt="" /></span>
								<p>
									Bagian Work untuk menampilkan project, portofolio, atau informasi lain.
								</p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="images/iday.jpg" alt="" /></span>
								<p>
									Bagian Work untuk menampilkan project, portofolio, atau informasi lain.
								</p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">Pemisah Dunia dan Penyatunya</h2>
								<span class="image main"><img src="images/magichands.jpg" alt="" /></span>
								<p>Ritualitas </p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Nama</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Pesan</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Kirim Pesan" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">© <?php echo date("Y"); ?>. dibuat oleh Amar.</p>
					</footer>

			</div>

			<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



