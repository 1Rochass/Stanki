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
  <?php shailan_dropdown_menu(); // Dropdown Menu Widget  ?> 
</div>


