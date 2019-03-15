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
    <?php if (is_page('Станки в наличии') || is_home()): 

      // Need for WP 
      global $wpdb; 
    // Get categories
      $categories = $wpdb->get_results("
        SELECT * FROM wp_terms
        join wp_termmeta
        on wp_terms.term_id = wp_termmeta.term_id
        WHERE wp_termmeta.meta_value > 0 ORDER BY wp_termmeta.meta_value DESC
      ");

    // Multisort array
      function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
          $sort_col = array();
          foreach ($arr as $key=> $row) {
              $sort_col[$key] = $row->$col;
          }

          array_multisort($sort_col, $dir, $arr);
      }
      array_sort_by_column($categories, 'meta_value');


    // Show categories
      foreach ($categories as $value) {
        echo '<div class="my-titles">   
          <a href="<?php echo get_site_url() ?>/product-category/' . $value->slug . '/">' . $value->name . '</a>
        </div>';

        echo do_shortcode('[product_category per_page="99" category="'. $value->slug .'" orderby="meta_value"]'); 
      }
    
    else: // is_page?> 



    <!-- The Loop -->
    <?$loop = new WP_Query( array(
      'post_type' => 'product',  // указываем, что выводить нужно именно товары
      'posts_per_page' => 4, // количество товаров для отображения
      'orderby' => 'date', // тип сортировки (в данном случае по дате)
      'product_cat' => 'tokarnye', // указываем слаг нужной категории
    ));
?>

      <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-text"><?php the_content(); ?></div>
        <div class=""><?php $product->get_price_html(); ?></div>
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



