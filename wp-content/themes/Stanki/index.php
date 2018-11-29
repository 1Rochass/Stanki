<div id="page_layout"> <!-- Layout of page -->
	<div class="header row">
		<div class="header-wrapper col-md-12">
			<?php get_header(); ?> <!-- Get header -->
		</div>
	</div>
	<div class="main row">
		<div class="main-sidebar d-none d-md-block col-md-3">
			<?php get_sidebar(); ?> <!-- Get sidebar -->
		</div>
		<div class="main-content col-md-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    
		    <div class="post-content">
		      <div class="post-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
		      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		      <div class="post-text"><?php the_excerpt(); ?></div>
		      <div class="readmore"><a href="<?php the_permalink(); ?>">Читать далее</a></div>
		    </div>

		    <?php endwhile; ?>

		    <?php else: ?>

		    <?php endif; ?>
		</div>
	</div>

	<div class="footer">
		<div class="footer-nav col-md-12">
			<?php get_footer(); ?>
		</div>
	</div>
</div>





