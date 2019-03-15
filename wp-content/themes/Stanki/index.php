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
			<?php echo do_shortcode('[product_category per_page="99" category="tokarnye" orderby="meta_value"]'); ?>
		<!-- Frezernye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/frezernye/">Фрезерные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="frezernye" orderby="meta_value"]'); ?>
		<!-- sverlilnye-i-rastochnye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/sverlilnye-i-rastochnye/">Сверлильные и расточные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="sverlilnye-i-rastochnye" orderby="meta_value"]'); ?>
		<!-- pressy -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/pressy/">Прессы</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="pressy" orderby="meta_value"]'); ?>
		<!-- strogalnye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/strogalnye/">Строгальные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="strogalnye" orderby="meta_value"]'); ?>
		<!-- shlifovalnye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/shlifovalnye/">Шлифовальные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="shlifovalnye" orderby="meta_value"]'); ?>
		<!-- pilnye -->
			<div class="my-titles">		
				<a href="<?php echo get_site_url() ?>/product-category/pilnye/">Пильные</a>
			</div>
			<?php echo do_shortcode('[product_category per_page="99" category="pilnye" orderby="meta_value"]'); ?>
		</div>
	</div>
	<div class="footer">
		<div class="footer-nav col-md-12">
			<?php get_footer(); ?>
		</div>
	</div>
</div>





