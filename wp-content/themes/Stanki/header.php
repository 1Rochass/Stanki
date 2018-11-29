<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); // Устанавливает кодировку. ?>">
	<title><?php echo wp_get_document_title(); // Возвращает title документа. ?></title>
  <link href="<?php bloginfo('stylesheet_url'); // Подключаем стили css?>" rel="stylesheet" type="text/css" /> 
	<?php wp_head();  // Это обязательный хук-действие темы. ?> 
</head>
<body>
<div class="header-site-branding">
  
</div>
<div class="header-nav">
<?php

  $args = array(
  'theme_location' => 'main-menu',
  'menu' => 'main-menu',
  'container' => 'nav',
  'container_class' => 'menu-{menu-slug}-container',
  'container_id' => 'main-menu',
  'menu_class' => '',
  'menu_id' => 'main-menu',
  'echo' => true,
  'fallback_cb' => '__return_empty_string',
  'before' => '',
  'after' => '',
  'link_before' => '',
  'link_after' => '',
  'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
  'depth' => 0,
  'walker' => ''
  );

  wp_nav_menu( $args );

?>

</div>


