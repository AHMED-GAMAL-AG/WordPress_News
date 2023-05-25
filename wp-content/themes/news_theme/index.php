<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package news_app
 */

get_header();
?>

<div class="header-news mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="carousel-news">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">2</button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">3</button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a href="article.html">
									<img src="./images/picture-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-text">
										<h3>لوريوم سبيوم: لوريم إيبسوم هو ببساطة نص شكلي</h3>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="article.html">
									<img src="./images/picture-4.jpg" class="d-block w-100" alt="...">
									<div class="carousel-text">
										<h3>لوريوم سبيوم: لوريم إيبسوم هو ببساطة نص شكلي</h3>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="article.html">
									<img src="./images/picture-7.jpg" class="d-block w-100" alt="...">
									<div class="carousel-text">
										<h3>لوريوم سبيوم: لوريم إيبسوم هو ببساطة نص شكلي</h3>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="header-articles">
					<a href="article.html" class="article-link">
						<div class="row">
							<div class="col-5">
								<img src="./images/picture-12.jpg" alt="...">
							</div>
							<div class="col-7">
								<div class="article-text">
									<span class="article-category">
										اخبار
									</span>
									<h5 class="article-title">لوريم إيبسوم هو ببساطة نص شكلي ويُستخدم في صناعات المطابع ودور النشر حسوب والأكاديمية، لوريوم أيبسويوم</h5>
								</div>
							</div>
						</div>
					</a>
					<a href="article.html" class="article-link">
						<div class="row">
							<div class="col-5">
								<img src="./images/picture-13.jpg" alt="...">
							</div>
							<div class="col-7">
								<div class="article-text">
									<span class="article-category">
										اخبار
									</span>
									<h5 class="article-title">لوريم إيبسوم هو ببساطة نص شكلي ويُستخدم في صناعات المطابع ودور النشر حسوب والأكاديمية، لوريوم أيبسويوم</h5>
								</div>
							</div>
						</div>
					</a>
					<a href="article.html" class="article-link">
						<div class="row">
							<div class="col-5">
								<img src="./images/picture-5.jpg" alt="...">
							</div>
							<div class="col-7">
								<div class="article-text">
									<span class="article-category">
										اخبار
									</span>
									<h5 class="article-title">لوريم إيبسوم هو ببساطة نص شكلي ويُستخدم في صناعات المطابع ودور النشر حسوب والأكاديمية، لوريوم أيبسويوم</h5>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<main>
	<section class="news mt-5">
		<div class="container">
			<h2 class="section-title">
				الأخبار
			</h2>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img class="news-img" src="./images/picture-12.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-1.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-2.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-3.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-10.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-14.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-15.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
					<a href="./article.html" class="article-link">
						<img src="./images/picture-13.jpg" alt="...">
						<div class="article-text mt-3">
							<span class="article-category">
								اقتصاد
							</span>
							<h5 class="article-title">
								لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى ويُستخدم في صناعات المطابع ودور النشر
							</h5>
						</div>
					</a>
				</div>
			</div>
			<div class="text-center mt-5">
				<a href="#" class="py-1 button">
					المزيد
				</a>
			</div>
		</div>
	</section>

	<section class="most-read">
		<div class="container">
			<h2 class="section-title">
				الأكثر قراءة
			</h2>
			<div class="card-news">
				<a href="./article.html">
					<div class="row">
						<div class="col-md-5">
							<img src="./images/picture-12.jpg" alt="...">
						</div>
						<div class="col-md-7">
							<div class="card-text">
								<h4>لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت</h4>
								<p>
									لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا
									. يوت انيم أد مينيم فينايمكيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
									. ديواس أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت
									أيسسي كايلليوم دولار أيو فيجايت نيولا باراياتيور
									. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت سيونت ان كيولبا كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم
								</p>
								<time datetime="18-12-2022">
									الأحد، 18-12-2022
								</time>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="card-news">
				<a href="./article.html">
					<div class="row">
						<div class="col-md-5">
							<img src="./images/picture-12.jpg" alt="...">
						</div>
						<div class="col-md-7">
							<div class="card-text">
								<h4>لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت</h4>
								<p>
									لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا
									. يوت انيم أد مينيم فينايمكيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
									. ديواس أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت
									أيسسي كايلليوم دولار أيو فيجايت نيولا باراياتيور
									. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت سيونت ان كيولبا كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم
								</p>
								<time datetime="18-12-2022">
									الأحد، 18-12-2022
								</time>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="card-news">
				<a href="./article.html">
					<div class="row">
						<div class="col-md-5">
							<img src="./images/picture-12.jpg" alt="...">
						</div>
						<div class="col-md-7">
							<div class="card-text">
								<h4>لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت</h4>
								<p>
									لوريم ايبسوم دولار سيت أميت كونسيكتيتور أدايبا يسكينج أليايتسيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا
									. يوت انيم أد مينيم فينايمكيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
									. ديواس أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت
									أيسسي كايلليوم دولار أيو فيجايت نيولا باراياتيور
									. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت سيونت ان كيولبا كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم
								</p>
								<time datetime="18-12-2022">
									الأحد، 18-12-2022
								</time>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section class="opinions">
		<div class="container">
			<h2 class="section-title">
				مقالات الرأي
			</h2>

			<div class="row mt-4">
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-13.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-12.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-3.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-10.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-6.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-8.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-7.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="./images/picture-6.jpg" alt="...">
						</div>

						<div class="card-body p-0">
							<p class="card-title p-2"><a class="text-dark" href="#">لوريم ايبسوم دولار سيت أميت كونسيكتيتور</p>
						</div>

						<div class="card-footer p-2">
							<small class="text-muted">
								<span class="me-2"><i class="fas fa-film me-1"></i> <span>10 مشاهدة</span></span>
								<i class="fas fa-clock me-1"></i> <time datetime="31/10/2023">31/10/2023</time>
							</small>
						</div>
						<a href="#" class="p-2">
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="./images/user_img/user_1.jpg" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>
			</div>
			<div class="text-center mt-5">
				<a href="#" class="py-1 button">
					المزيد
				</a>
			</div>
		</div>


	</section>

	<section class="videos">
		<div class="container">
			<h2 class="section-title">
				فيديو
			</h2>
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-13.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-17.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-16.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-15.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-14.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="article.html" class="article-link">
							<div class="slide-img">
								<img src="./images/picture-5.jpg" alt="...">
								<i class="fa-solid fa-play"></i>
							</div>
							<div class="slide-text">
								<h5 class="article-title">
									لوريوم أيكسسيبتيور الأحمد نص
								</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<section class="latest-news">
		<div class="container">
			<h2 class="section-title mb-4">
				أحدث الأخبار
			</h2>
			<div class="row">
				<div class="col-md-6">
					<a href="article.html" class="article-link">
						<img src="./images/picture-17.jpg" alt="...">
						<div class="card-text my-3">
							<span class="article-category">اقتصاد</span>
							<h5 class="article-title">لوريوم أيكسسيبتيور الأحمد نص</h5>
							<p>
								أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايمكيواس نوستريد

								أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
							</p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="article.html" class="article-link">
						<div class="row">
							<div class="col-sm-6">
								<img src="./images/picture-10.jpg" alt="...">
							</div>
							<div class="col-sm-6">
								<div class="card-text mb-3 card-text-2">
									<span class="article-category">
										تكنولوجيا
									</span>
									<h5 class="article-title">
										أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايمكيواس نوستريد
									</h5>
								</div>
							</div>
						</div>
					</a>
					<div class="row mt-4">
						<div class="col-sm-6">
							<a href="article.html" class="article-link">
								<img src="./images/picture-13.jpg" alt="...">
								<div class="card-text my-3">
									<span class="article-category">
										حاسوب
									</span>
									<h5 class="article-title">
										نكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايمكيواس نوستريد
									</h5>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a href="article.html" class="article-link">
								<img src="./images/picture-12.jpg" alt="...">
								<div class="card-text my-3">
									<span class="article-category">
										اخبار
									</span>
									<h5 class="article-title">
										نكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايمكيواس نوستريد
									</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt-5">
				<a href="#" class="btn button">االمزيد</a>
			</div>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
