<hr class="mt-5">
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h4 class="footer-title">
					من نحن
				</h4>
				<?php if (is_active_sidebar('who-are-we')) : ?>
					<?php dynamic_sidebar('who-are-we'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4 class="footer-title">
					تواصل معنا
				</h4>
				<?php if (is_active_sidebar('connect')) : ?>
					<?php dynamic_sidebar('connect'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4 class="footer-title">
					وسائل التواصل
				</h4>
				<ul class="list-unstyled">
					<li class="mt-3">
						<i class="fa-solid fa-location-dot"></i>
						التجمع الخامس
					</li>
					<li class="mt-3">
						<i class="fa-solid fa-phone"></i>
						0 341 02251144
					</li>
					<li class="mt-3">
						<i class="fa-solid fa-envelope"></i>
						info@mynews.com
					</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4 class="footer-title">
					تابعنا على
				</h4>
				<?php if (is_active_sidebar('follow-us-on')) : ?>
					<?php dynamic_sidebar('follow-us-on'); ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>