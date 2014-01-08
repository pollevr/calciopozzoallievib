<?php
function get_featcat_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
  	$img_dir = get_bloginfo('template_directory');
    $first_img = $img_dir . '/images/fcdefault.jpg';
  }
  return $first_img;
}
?>
<div id="featured-category">

<?php $featured_category1 = get_option('swt_featured_category1'); $featured_number1 = get_option('swt_featured_number1'); ?>

<?php if(($featured_category1 == "Choose a category:") || ($featured_number1 == '')) { ?>

<?php { /* nothing */ } ?>


<?php } else { ?>

<div class="feat-cat-entry">
<div class="fcbot">
<h3><?php echo stripslashes($featured_category1); ?></h3>

<?php
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category1 . '&' . 'offset=' . '&' . 'showposts='. $featured_number1);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID();
?>

<div class="feat-cat-meta post-<?php the_ID(); ?>">

<?php $values = get_post_custom_values("feat-cat-img"); if (isset($values[0])) { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php $values = get_post_custom_values("feat-cat-img"); echo $values[0]; ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>
<?php the_content(); ?>
</div>

<?php } else { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php echo get_featcat_image(); ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>
</div>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>  <?php the_content_limit(80, "more") ?>

<div class="clearfix"></div>

</div><!-- FEAT META <?php the_ID(); ?> END -->

<?php endwhile;?>

</div>
</div><!-- FEAT CAT ENTRY END -->


<?php } ?>

<?php $featured_category2 = get_option('swt_featured_category2'); $featured_number2 = get_option('swt_featured_number2'); ?>

<?php if(($featured_category2 == "Choose a category:") || ($featured_number2 == '')) { ?>

<?php { /* nothing */ } ?>


<?php } else { ?>

<div class="feat-cat-entry">
<div class="fcbot">
<h3><?php echo stripslashes($featured_category2); ?></h3>

<?php
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category2 . '&' . 'offset=' . '&' . 'showposts='. $featured_number2);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID();
?>

<div class="feat-cat-meta post-<?php the_ID(); ?>">

<?php $values = get_post_custom_values("feat-cat-img"); if (isset($values[0])) { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php $values = get_post_custom_values("feat-cat-img"); echo $values[0]; ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>
<?php the_content(); ?>
</div>

<?php } else { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php echo get_featcat_image(); ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>

</div>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>  <?php the_content_limit(80, "more") ?>

<div class="clearfix"></div>

</div><!-- FEAT META <?php the_ID(); ?> END -->

<?php endwhile;?>

</div>
</div><!-- FEAT CAT ENTRY END -->


<?php } ?>
<?php $featured_category3 = get_option('swt_featured_category3'); $featured_number3 = get_option('swt_featured_number3'); ?>

<?php if(($featured_category3 == "Choose a category:") || ($featured_number3 == '')) { ?>

<?php { /* nothing */ } ?>


<?php } else { ?>

<div class="feat-cat-entry">
<div class="fcbot">
<h3><?php echo stripslashes($featured_category3); ?></h3>

<?php
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category3 . '&' . 'offset=' . '&' . 'showposts='. $featured_number3);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID();
?>

<div class="feat-cat-meta post-<?php the_ID(); ?>">

<?php $values = get_post_custom_values("feat-cat-img"); if (isset($values[0])) { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php $values = get_post_custom_values("feat-cat-img"); echo $values[0]; ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>
<?php the_content(); ?>
</div>

<?php } else { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php echo get_featcat_image(); ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>

</div>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>  <?php the_content_limit(80, "more") ?>

<div class="clearfix"></div>

</div><!-- FEAT META <?php the_ID(); ?> END -->

<?php endwhile;?>

</div>
</div><!-- FEAT CAT ENTRY END -->


<?php } ?>
<?php $featured_category4 = get_option('swt_featured_category4'); $featured_number4 = get_option('swt_featured_number4'); ?>

<?php if(($featured_category4 == "Choose a category:") || ($featured_number4 == '')) { ?>

<?php { /* nothing */ } ?>


<?php } else { ?>

<div class="feat-cat-entry">
<div class="fcbot">
<h3><?php echo stripslashes($featured_category4); ?></h3>

<?php
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category4 . '&' . 'offset=' . '&' . 'showposts='. $featured_number4);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID();
?>

<div class="feat-cat-meta post-<?php the_ID(); ?>">

<?php $values = get_post_custom_values("feat-cat-img"); if (isset($values[0])) { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php $values = get_post_custom_values("feat-cat-img"); echo $values[0]; ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>
<?php the_content(); ?>
</div>

<?php } else { ?>

<div class="feat-cat-img">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/includes/timthumb.php?src=<?php echo get_featcat_image(); ?>&amp;w=45&amp;h=45&amp;zc=1" alt="<?php the_title(); ?>" /></a>

</div>

<?php } ?>

<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>  <?php the_content_limit(80, "more") ?>

<div class="clearfix"></div>

</div><!-- FEAT META <?php the_ID(); ?> END -->

<?php endwhile;?>

</div>
</div><!-- FEAT CAT ENTRY END -->


<?php } ?>
</div><!-- FEATURED CATEGORY END -->
