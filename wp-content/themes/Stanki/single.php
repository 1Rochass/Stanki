<div class="header row">
  <div class="header-nav col-md-12">
    <?php get_header(); ?> <!-- Get header -->
  </div>
</div>
<h1>Main</h1>
<div class="main row">
  <div class="main-content col-md-12">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-text"><?php the_content(); ?></div>
      <?php comments_template(); ?>
      <?php endwhile; ?>

      <?php else: ?>

      <?php endif; ?>
  </div>
</div>
<div class="footer row">
  <div class="footer-nav col-md-12">
    <?php get_footer(); ?>
  </div>
</div>