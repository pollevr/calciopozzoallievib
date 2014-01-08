<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Allievi_Pozzo
 * @since Allievi Pozzo 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		
		<h5 class="center">Calcio Pozzo - Allievi B</h5>
		<h1 class="entry-title center"><?php the_title(); ?></h1>
		
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
    <div class="entry-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    
		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content teampage">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		<?php $custom_fields = get_post_custom(); ?>
  <fieldset class="dataset">
    <legend>Dettaglio di <?php the_title(); ?></legend>
    <dl>
      <dt>Nome</dt><dd><?php echo $custom_fields['nome'][0]; ?></dd>
      <dt>Cognome</dt><dd><?php echo $custom_fields['cognome'][0]; ?></dd>
      <dt>Data di nascita</dt><dd><?php echo date("d M Y", strtotime($custom_fields['data_di_nascita'][0])); ?></dd>
      <dt>Ruolo</dt><dd><?php echo $custom_fields['ruolo'][0]; ?><?php echo $custom_fields['ruolo_staff'][0]; ?></dd>
      <dt>Presenze</dt><dd><?php echo $custom_fields['presenze'][0]; ?></dd>
      <dt>Reti</dt><dd><?php echo $custom_fields['gol'][0]; ?></dd>
      <dt>Ammonizioni</dt><dd><?php echo $custom_fields['ammonizioni'][0]; ?></dd>
      <dt>Espulsioni</dt><dd><?php echo $custom_fields['espulsioni'][0]; ?></dd>
    </dl>
  </fieldset>

	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
