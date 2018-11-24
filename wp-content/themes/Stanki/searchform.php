<!-- Bootstrap 4 searchform  -->
<form action="/" method="get" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" aria-label="Search">
    <button id="searchsubmit" class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
</form>


<!-- Old searchform -->
<!-- <form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="widget-search">
    <input type="search" class="search-field" value="" placeholder="Искать..." name="s" id="s" class="input-search" />
    <button type="submit" class="search-submit" >Поиск</button>
  </div>
</form> -->

