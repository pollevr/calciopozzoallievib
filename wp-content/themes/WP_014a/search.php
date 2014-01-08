<?php get_header(); ?>
<div class="art-contentLayout"><div class="art-content">
<?php if (have_posts()) : ?>
<div class="art-Block"><div class="art-Block-tl"></div><div class="art-Block-tr"></div><div class="art-Block-bl"></div><div class="art-Block-br"></div><div class="art-Block-tc"></div><div class="art-Block-bc"></div><div class="art-Block-cl"></div><div class="art-Block-cr"></div><div class="art-Block-cc"></div><div class="art-Block-body"><div class="art-BlockHeader"><div class="l"></div><div class="r"></div><div class="art-header-tag-icon"><div class="t">
<?php _e('Search Results', 'kubrick'); ?>
</div></div></div><div class="cleared"></div></div></div>
<?php include (TEMPLATEPATH . '/posts.php'); ?>
<?php else : ?>
<div class="art-Block"><div class="art-Block-tl"></div><div class="art-Block-tr"></div><div class="art-Block-bl"></div><div class="art-Block-br"></div><div class="art-Block-tc"></div><div class="art-Block-bc"></div><div class="art-Block-cl"></div><div class="art-Block-cr"></div><div class="art-Block-cc"></div><div class="art-Block-body"><div class="art-BlockHeader"><div class="l"></div><div class="r"></div><div class="art-header-tag-icon"><div class="t">
<?php _e('Search', 'kubrick'); ?>
</div></div></div><div class="art-BlockContent"><div class="art-BlockContent-body">
<?php _e('No posts found. Try a different search?', 'kubrick'); ?>
<?php if(function_exists('get_search_form')) get_search_form(); ?>
<div class="cleared"></div></div></div><div class="cleared"></div></div></div>
<?php endif; ?>
</div>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div><div class="cleared"></div>
<?php get_footer(); ?>