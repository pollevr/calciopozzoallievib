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


<?php $featured_category1 = get_option('swt_bluzon_featured_category1'); $featured_number1 = get_option('swt_bluzon_featured_number1'); ?>

<?php if(($featured_category1 == "Choose a category:") || ($featured_number1 == '')) { ?>

<?php { /* nothing */ } ?>


<?php } else { ?>

<div class="feat-cat-entry">
<h3>Latest Articles On <?php echo stripslashes($rk_bluzon_featured_category1); ?></h3>


</div><!-- FEAT CAT ENTRY END -->

<?php } ?>

</div><!-- FEATURED CATEGORY END -->
