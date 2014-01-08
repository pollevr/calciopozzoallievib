<?php get_header(); ?>
<div id="upcontent">
<div class="conbot">
    <?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>

<?php if (get_option('swt_banners') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/banners.php'); } ?>
</div>
</div>
<div id="wrap">
<div id="contentwrap">
<div class="cwraptop">
<div class="inside">
   
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <div class="meta">
                  <span class="date"><?php the_time('jS  F, Y'); ?></span> | <span class="author">Posted by <?php the_author(); ?></span> | <span class="edit"><?php edit_post_link('Edit', '', ' | '); ?></span>
                </div>
           
				<div class="entry">
					<?php the_content(''); ?>
				</div>

            	<p class="postmetadata"><span class="cat">Posted in <?php the_category(', ') ?></span> | <span class="comm"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span></p>
			</div>

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
</div>

<?php get_sidebar(); ?>
<?php include(TEMPLATEPATH . '/sidebar2.php'); ?>
<?php if (get_option('swt_fcats') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/featured-cats.php'); } ?>

</div>
<?php get_footer(); ?>
