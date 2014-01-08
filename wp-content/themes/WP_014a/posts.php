<?php while (have_posts()) : the_post(); ?>
<div class="art-Post"><div class="art-Post-tl"></div><div class="art-Post-tr"></div><div class="art-Post-bl"></div><div class="art-Post-br"></div><div class="art-Post-tc"></div><div class="art-Post-bc"></div><div class="art-Post-cl"></div><div class="art-Post-cr"></div><div class="art-Post-cc"></div><div class="art-Post-body"><div class="art-Post-inner art-article">
<h2 class="art-PostHeader"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
<?php ob_start(); ?>
<?php $icons = array(); ?>
<?php if (!is_page()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostDateIcon.png" width="15" height="14" alt="" />
<?php the_time(__('F jS, Y', 'kubrick')) ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostAuthorIcon.png" width="18" height="18" alt="" />
<?php the_author_posts_link() ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (!is_page() && !is_single()): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostCommentsIcon.png" width="18" height="18" alt="" />
<?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (current_user_can('edit_post', $post->ID)): ?><?php ob_start(); ?><img src="<?php bloginfo('template_url'); ?>/images/PostEditIcon.png" width="20" height="20" alt="" />
<?php edit_post_link(__('Edit', 'kubrick'), ''); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (0 != count($icons)): ?>
<div class="art-PostHeaderIcons art-metadata-icons">
<?php echo implode(' | ', $icons); ?>
</div>
<?php endif; ?>
<?php $metadataContent = ob_get_clean(); ?>
<?php if (trim($metadataContent) != ''): ?>
<div class="art-PostMetadataHeader">
<?php echo $metadataContent; ?>
</div>
<?php endif; ?>
<div class="art-PostContent">
<?php the_excerpt();?>
<?php if (is_page() or is_single()) wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<a href="<?php the_permalink(); ?>"><span class="read-more">Read More</span></a>
</div>
<div class="cleared"></div></div><div class="cleared"></div></div></div>
<?php endwhile; ?>
<?php
$prev_link = get_previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
$next_link = get_next_posts_link(__('&laquo; Older Entries', 'kubrick'));
?>
<?php if ($prev_link || $next_link): ?>
<?php include (TEMPLATEPATH . '/navigation.php'); ?>
<?php endif; ?>