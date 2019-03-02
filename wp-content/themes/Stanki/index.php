<div id="wrapper"> <!-- Wrapper -->
	<div class="header row no-gutters">
		<div class="header-wrapper col-md-12">
			<?php get_header(); ?> <!-- Get header -->
		</div>
	</div>
	<div class="main row no-gutters">
		<div class="main-content col-md-12">
		<!-- Tokarnye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/tokarnye/">Токарные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="4" category="tokarnye"]'); ?>
		<!-- Frezernye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/frezernye/">Фрезерные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="4" category="frezernye"]'); ?>
		</div>
	</div>

	<div class="footer">
		<div class="footer-nav col-md-12">
			<?php get_footer(); ?>
		</div>
	</div>
</div>





