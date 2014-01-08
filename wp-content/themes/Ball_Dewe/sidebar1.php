<div class="art-layout-cell art-sidebar1">      
<?php if (!art_sidebar(1)): ?>
<div class="art-vmenublock">
    <div class="art-vmenublock-body">
<div class="art-vmenublockheader">
     <div class="t"><?php _e($artThemeSettings['vmenu.source'], 'kubrick'); ?></div>
</div>
<div class="art-vmenublockcontent">
    <div class="art-vmenublockcontent-body">
<!-- block-content -->
<ul class="art-vmenu">
<?php art_vmenu_items(); ?>
</ul>

<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
<div class="art-blockheader">
     <div class="t"><?php _e('Search', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" style="width: 95%;" />
<span class="art-button-wrapper">
	<span class="l"> </span>
	<span class="r"> </span>
	<input class="art-button" type="submit" name="search" value="<?php _e('Search', 'kubrick'); ?>" />
</span>
</form>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
<div class="art-blockheader">
     <div class="t"><?php _e('Categories', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<ul>
  <?php wp_list_categories('show_count=1&title_li='); ?>
</ul>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
<div class="art-blockheader">
     <div class="t"><?php _e('Archives', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
     <?php if ( is_404() || is_category() || is_day() || is_month() ||
            is_year() || is_search() || is_paged() ) {
      ?>
      <?php /* If this is a 404 page */ if (is_404()) { ?>
      <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <p><?php printf(__('You are currently browsing the archives for the %s category.', 'kubrick'), single_cat_title('', false)); ?></p>

      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'kubrick'))); ?></p>

      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'kubrick'))); ?></p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y')); ?></p>

      <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p><?php printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), wp_specialchars(get_search_query(), true)); ?></p>

      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name')); ?></p>


      <?php } ?>

      <?php }?>

      <ul>
      <?php wp_get_archives('type=monthly&title_li='); ?>
      </ul>
    
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-body">
<div class="art-blockheader">
     <div class="t"><?php _e('Bookmarks', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<ul>
      <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
      </ul>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif ?>
</div>