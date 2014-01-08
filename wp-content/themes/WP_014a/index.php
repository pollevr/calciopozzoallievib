<?php get_header(); ?>
<div class="art-contentLayout"><div class="art-content">
<?php if (have_posts()) : ?>
<?php include (TEMPLATEPATH . '/featured-posts.inc'); ?>
<div align="center">
<?php include (TEMPLATEPATH . '/468x60.inc'); ?>
</div>
<?php include (TEMPLATEPATH . '/posts.php'); ?>
<?php else : ?>
<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
<?php if(function_exists('get_search_form')) get_search_form(); ?>
<?php endif; ?>
</div>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>