<div id="sidebar">



<?php if (!function_exists('dynamic_sidebar')
	|| !dynamic_sidebar()) : ?>

        <div class="side-widget">
    	<h3>Pages</h3>
          <ul><?php wp_list_pages('title_li=' ); ?></ul>

       </div>
    <div class="side-widget widget_archive">
    <h3>Categories</h3>
    <ul>
    <?php wp_list_categories('title_li=' ); ?>
    </ul>
    </div>
       <div class="side-widget">
      <h3>Blogroll</h3>
      <ul>
      <?php wp_list_bookmarks('title_li=&categorize=0');  ?>
      </ul>
   </div>
    <div class="side-widget widget_archive">
    	<h3>Archives</h3>
        <ul>
			 <li><?php wp_get_archives('type=monthly'); ?></li>
        </ul>
    </div>


    <?php endif; ?>

</div>

