<?php get_header(); ?>

<?php if (get_option('swt_fcats') == 'Hide') { ?>
<?php { echo '<div id="contentwrap1">'; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/featured-cats.php'); echo '<div id="contentwrap">';  include(TEMPLATEPATH .'/includes/slide.php'); } ?>
<div class="inside">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                 <div class="meta">
                    <span class="author">Posted by <?php the_author(); ?></span><span class="comm"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><span class="date"><?php the_time('M d, Y'); ?></span>
                      </div>

				<div class="entry">
                <?php if ( function_exists( 'get_the_image' ) ) {
                    get_the_image( array( 'custom_key' => array( 'post_thumbnail' ), 'default_size' => 'full', 'image_class' => 'aligncenter', 'width' => '384', 'height' => '150' ) ); }
 ?>
        		<?php the_content(''); ?>
				</div>
           			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> </p>
			</div>
            <?php comments_template('', 'true'); ?>
		<?php endwhile; ?>

		<div class="navigation">
        <?php
            include('includes/wp-pagenavi.php');
            if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
        ?>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
