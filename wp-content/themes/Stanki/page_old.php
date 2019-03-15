<div id="page_layout"> <!-- Layout of page -->
  <div class="header row no-gutters">
    <div class="header-wrapper col-md-12">
      <?php get_header(); ?> <!-- Get header -->
    </div>
  </div>
  <div class="main row no-gutters">
    <!-- <div class="main-sidebar d-none d-md-block col-md-3">
      <?php get_sidebar(); ?> <!-- Get sidebar 
    </div> -->
    <div class="main-content col-md-12">

    <!-- If page == Main page -->
    <?php if (is_page('Станки в наличии') || is_home()): ?>

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

    
    <?php else: // is_page?> 

    <!-- The Loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-text"><?php the_content(); ?></div>
        <?php endwhile; ?>
        <?php else: ?>
      <?php endif; ?>
      

    <?php endif; // is_page?>

    </div>
  </div>

  <div class="footer">
    <div class="footer-nav col-md-12">
      <?php get_footer(); ?>
    </div>
  </div>
</div>



