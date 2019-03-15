<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 */
get_header(); // подключаем header.php ?>
<section>
  <div class="container">
    <div class="row">
    <?php get_sidebar(); // подключаем sidebar.php ?>
      <div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
        <?php woocommerce_breadcrumb(); ?>
        <?php woocommerce_content(); ?>
      </div>

    </div>
  </div>
</section>
<?php get_footer(); // подключаем footer.php ?>