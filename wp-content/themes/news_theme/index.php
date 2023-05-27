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


						<?php
						$query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'tax_query' => array(
								array(
									'taxonomy' => 'front_position', // taxonomy name
									'field' => 'slug',
									'terms' => 'image-slider', // the slug name for the أخبار الدوار
								)
							)
						));
						while ($query->have_posts()) : $query->the_post();
							if ($query->current_post == 0) { // if first post set active class for carousel item
						?>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<a href="<?php the_permalink(); ?>">
											<?php if (has_post_thumbnail()) {
												the_post_thumbnail();
											} else { ?>
												<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
											<?php } ?>
										</a>
										<div class="carousel-text">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
									</div>
								<?php
							} else { ?>
									<div class="carousel-item">
										<a href="<?php the_permalink(); ?>">
											<?php if (has_post_thumbnail()) {
												the_post_thumbnail();
											} else { // show the default image if the post doesn't have a thumbnail
											?>
												<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
											<?php } ?>
										</a>
										<div class="carousel-text">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
									</div>
							<?php
							}
						endwhile; ?>
								</div>


					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="header-articles">
					<?php
					$query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'tax_query' => array(
							array(
								'taxonomy' => 'front_position', // taxonomy name
								'field' => 'slug',
								'terms' => 'header-news', // the slug name for the أخبار الرأس
							)
						)
					));
					while ($query->have_posts()) : $query->the_post();

					?>
						<div class="row">
							<div class="col-5">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) {
										the_post_thumbnail();
									} else { ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
									<?php } ?>
								</a>
							</div>
							<div class="col-7">
								<div class="article-text">
									<span class="article-category ">
										<?php the_category('، ') // the , if their is more than one category
										?>
									</span>
									<h5 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
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

				<?php
				$query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 8,
					'tax_query' => array(
						array(
							'taxonomy' => 'front_position',
							'field' => 'slug',
							'terms' => 'front-news',
						)
					)
				));
				while ($query->have_posts()) : $query->the_post(); ?>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-4">
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail();
							} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
						</a>
						<div class="article-text mt-3">
							<span class="article-category">
								<?php the_category('، ') ?>
							</span>
							<h5 class="article-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h5>
						</div>
					</div>
				<?php endwhile; ?>

			</div>
			<div class="text-center mt-5">
				<a href=" <?php echo site_url('/show-more')  ?> " class="py-1 button">
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

			<?php
			$most_viewed = new WP_Query([
				'meta_key' => 'post_views_count',
				'post_per_page' => 3,
				'order_by' => 'meta_value_num',
				'order' => 'ASC'
			]);
			?>

			<?php
			while ($most_viewed->have_posts()) : $most_viewed->the_post();
			?>
				<div class="card-news">
					<a href="./article.html">
						<div class="row">
							<div class="col-md-5">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) {
										the_post_thumbnail();
									} else { ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt="<?php the_title(); ?>" />
									<?php } ?>
								</a>
							</div>
							<div class="col-md-7">
								<div class="card-text">
									<a href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
									</a>

									<p><?php the_excerpt(); ?></p>

									<time datetime="<?php the_time('d/m/Y'); ?>"><?php the_time('j F Y'); ?></time>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
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
							<img src="<?php echo get_template_directory_uri() . './images/picture-13.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-12.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-3.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-10.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-6.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-4.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-7.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
							<span class="card-text ms-2">أحمد محمد</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card mb-4">
						<div class="card-icons">
							<img src="<?php echo get_template_directory_uri() . './images/picture-6.jpg' ?>" alt="...">
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
							<img class="rounded-circle" style="width: 50px;height:50px; margin-top:5px" src="<?php echo get_template_directory_uri() . './images/user_img/user_1.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-13.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-17.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-16.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-15.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-8.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-5.jpg' ?>" alt="...">
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
						<img src="<?php echo get_template_directory_uri() . './images/picture-17.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-10.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-13.jpg' ?>" alt="...">
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
								<img src="<?php echo get_template_directory_uri() . './images/picture-17.jpg' ?>" alt="...">
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
get_footer();
