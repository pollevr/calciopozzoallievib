<?php get_header(); ?>
<div class="art-contentLayout"><div class="art-content">
<?php is_tag(); ?>
<?php if (have_posts()) : ?>
<div class="art-Block"><div class="art-Block-tl"></div><div class="art-Block-tr"></div><div class="art-Block-bl"></div><div class="art-Block-br"></div><div class="art-Block-tc"></div><div class="art-Block-bc"></div><div class="art-Block-cl"></div><div class="art-Block-cr"></div><div class="art-Block-cc"></div><div class="art-Block-body"><div class="art-BlockHeader"><div class="l"></div><div class="r"></div><div class="art-header-tag-icon"><div class="t">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<?php printf(__('Archive for the &#8216;%s&#8217; Category', 'kubrick'), single_cat_title('', false)); ?>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<?php printf(__('Posts Tagged &#8216;%s&#8217;', 'kubrick'), single_tag_title('', false) ); ?>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<?php printf(_c('Archive for %s|Daily archive page', 'kubrick'), get_the_time(__('F jS, Y', 'kubrick'))); ?>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<?php printf(_c('Archive for %s|Monthly archive page', 'kubrick'), get_the_time(__('F, Y', 'kubrick'))); ?>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<?php printf(_c('Archive for %s|Yearly archive page', 'kubrick'), get_the_time(__('Y', 'kubrick'))); ?>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<?php _e('Author Archive', 'kubrick'); ?>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<?php _e('Blog Archives', 'kubrick'); ?>
<?php } ?>
</div></div></div><div class="cleared"></div></div></div>
<div align="center">
<?php include (TEMPLATEPATH . '/468x60.inc'); ?>
</div>
<?php include (TEMPLATEPATH . '/posts.php'); ?>
<?php else : ?>

<div class="art-Post">
<div class="art-Post-tl"></div>
<div class="art-Post-tr"></div>
<div class="art-Post-bl"></div>
<div class="art-Post-br"></div>
<div class="art-Post-tc"></div>
<div class="art-Post-bc"></div>
<div class="art-Post-cl"></div>
<div class="art-Post-cr"></div>
<div class="art-Post-cc"></div>
<div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<?php
if ( is_category() ) { // If this is a category archive
printf("<h2 class='center'>".__("Sorry, but there aren't any posts in the %s category yet.", "kubrick").'</h2>', single_cat_title('',false));
} else if ( is_date() ) { // If this is a date archive
echo('<h2>'.__("Sorry, but there aren't any posts with this date.", "kubrick").'</h2>');
} else if ( is_author() ) { // If this is a category archive
$userdata = get_userdatabylogin(get_query_var('author_name'));
printf("<h2 class='center'>".__("Sorry, but there aren't any posts by %s yet.", "kubrick")."</h2>", $userdata->display_name);
} else {
echo("<h2 class='center'>".__('No posts found.', 'kubrick').'</h2>');
}
if(function_exists('get_search_form')) get_search_form();
?>

</div>
<div class="cleared"></div>


</div>

<div class="cleared"></div>
</div>
</div>

<?php endif; ?>


</div>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>