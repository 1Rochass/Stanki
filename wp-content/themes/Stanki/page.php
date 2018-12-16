<div id="page_layout"> <!-- Layout of page -->
  <div class="header row no-gutters">
    <div class="header-wrapper col-md-12">
      <?php get_header(); ?> <!-- Get header -->
    </div>
  </div>
  <div class="main row no-gutters">
    <div class="main-sidebar d-none d-md-block col-md-3">
      <?php get_sidebar(); ?> <!-- Get sidebar -->
    </div>
    <div class="main-content col-md-9">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-text"><?php the_content(); ?></div>
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



