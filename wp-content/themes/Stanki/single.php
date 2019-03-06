<div id="wrapper"> <!-- Wrapper -->
<!-- Header -->
  <div class="header row no-gutters">
    <div class="header-wrapper col-md-12">
      <?php get_header(); ?> <!-- Get header -->
    </div>
  </div>
  <!-- Main -->
  <div class="main row no-gutters">
    <div class="main-content col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="post-text"><?php the_content(); ?></div>
        <?php comments_template(); ?>
        <?php endwhile; ?>

        <?php else: ?>

      <?php endif; ?>
    </div>
  </div>
<!-- Footer -->
  <div class="footer">
    <div class="footer-nav col-md-12">
      <?php get_footer(); ?>
    </div>
  </div>
</div>




