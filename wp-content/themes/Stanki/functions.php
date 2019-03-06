<?php

/**
* Remove cart from single product
*/
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

// 	/* Add my buttons instead cart buttons (It will be href for contacts from menu)*/
// 	add_action('woocommerce_after_shop_loop_item', 'my_woocommerce_after_shop_loop_item');
// 	add_action('woocommerce_single_product_summary', 'add_content_after_addtocart_button_func', 45);

// 	function my_woocommerce_after_shop_loop_item() {
// 		echo do_shortcode('<a href="" class="button">Обратный звонок</a>');
// 	}
// 	function add_content_after_addtocart_button_func() {
// 		echo do_shortcode('<a href="" class="button">Обратный звонок</a>');
// 	}

/**
* Cart
*/
// Remove in all product type
function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );

/**
* Checkout
*/

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
  
function custom_override_checkout_fields( $fields ) {
  //unset($fields['billing']['billing_first_name']);// имя
  unset($fields['billing']['billing_last_name']);// фамилия
  unset($fields['billing']['billing_company']); // компания
  unset($fields['billing']['billing_address_1']);//
  unset($fields['billing']['billing_address_2']);//
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_state']);
  //unset($fields['billing']['billing_phone']);
  //unset($fields['order']['order_comments']);
  //unset($fields['billing']['billing_email']);
  unset($fields['account']['account_username']);
  unset($fields['account']['account_password']);
  unset($fields['account']['account_password-2']);

 
  unset($fields['billing']['billing_company']);// компания
  unset($fields['billing']['billing_postcode']);// индекс 
    return $fields;
}

/**
* Coupon
*/
// Disble coupon 
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

/**
* Payment
*/
// Disable payment
add_filter( 'woocommerce_cart_needs_payment', '__return_false' );

/**
* Woocommerce shop loop
*/
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );

/**
* Cut product title
*/
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'trim_title_chars', 10 );

function trim_title_chars() {
$count = 47;
$after = " ...";
$title = get_the_title();
if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
else $after = '';
echo '<h2 class="woocommerce-loop-product__title">' . $title . $after  . '</h2>';
}





/**
* add js ans css bootstrap and other
*/
add_action( 'wp_enqueue_scripts', 'wpt_register_js' );
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style( 'my_style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'bootstrap.min' );
    wp_enqueue_style( 'my_style' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

/**
* add rub mark into price
*/
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'RUB': $currency_symbol = ' руб.'; break;
     }
     return $currency_symbol;
}





/**
* Поддержка миниатюр
**/
add_theme_support( 'post-thumbnails' );

/**
* Подключение меню
**/
register_nav_menus( array(
  'main-menu' => __( 'main-menu' )
));

/**
* Подключение сайдбара
**/
register_sidebar( array(
  'name' => __( 'Sidebar', 'Stanki' ),
  'id' => 'sidebar',
  'description' => 'Правая колонка сайта.',
  'before_widget' => '<aside class="widget">',
  'after_widget' => '</aside>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
));

/**
* Функции вывода анонса поста (цитаты) на главной
**/
function new_excerpt_length( $length ) {
  return 100;//количество выводимых символов анонса (по умолчанию 55)
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

/**
* Функции заменяет «[…]» на «...» в конце цитаты
**/
function new_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>