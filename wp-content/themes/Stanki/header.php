<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('url'); ?>/favicon.ico">
	<meta charset="<?php bloginfo('charset'); // Устанавливает кодировку. ?>">
	<title><?php echo wp_get_document_title(); // Возвращает title документа. ?></title>
  <link href="<?php bloginfo('stylesheet_url'); // Подключаем стили css?>" rel="stylesheet" type="text/css" /> 
	<?php wp_head();  // Это обязательный хук-действие темы. ?> 
</head>
<body>
<div class="header-site-branding">
  <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"  alt="">
  </div>
  <div class="site-branding">
    <div class="phone">
      <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="">
      <span class="">+7 912 89 77 001</span>
    </div>
    <div class="mail">
      <img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="">
      <span class="">8977001@bk.ru</span>
    </div>
  </div>
</div>
<div class="header-nav">
  <?php shailan_dropdown_menu(); // Dropdown Menu Widget  ?> 
  <div class="my-cart">
    <a href="http://stanki-met.ru/cart/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Cartred.png" alt="">
    </a>
  </div>
</div>


