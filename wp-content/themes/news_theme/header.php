<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous"> -->
	<?php wp_head(); ?>
	
	<title>أخباري</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.html">أخباري</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">أخبار</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">تكنولوجيا</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">اقتصاد</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">رياضة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">حاسوب</a>
						</li>
					</ul>
					<div class="login">
						<i class="fa-solid fa-user"></i>
						<div class="login-container">
							<a href="./login.html" class="button">تسجيل الدخول</a>
						</div>
					</div>
					<div class="login-button">
						<a href="login.html" class="button">تسجيل الدخول</a>
					</div>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<a href="./search.html" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
					</form>
				</div>
			</div>
		</nav>
	</header>
</body>