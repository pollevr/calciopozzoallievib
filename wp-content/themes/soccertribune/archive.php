<?php get_header() ?>
	<div id="contentwrap1">
    <div class="inside">
		<?php if(have_posts()): ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the '<?php single_cat_title(); ?>' Category</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged '<?php single_tag_title(); ?>'</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
		<?php } ?>
		<?php while(have_posts()) : the_post(); ?>
		<div class="post single" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
            <div class="meta">
            <span class="author">Posted by <?php the_author(); ?></span><span class="comm"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><span class="date"><?php the_time('M d, Y'); ?></span>
            </div>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			</div>
 	   <?php endwhile ?>
		<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); ?>
		<?php else : ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		<?php endif ?>
		<?php else: ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php endif ?>
</div>
</div>  
<?php get_sidebar(); get_footer(); ?>
