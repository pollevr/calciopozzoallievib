<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Allievi_Pozzo
 * @since Allievi Pozzo 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				  if (get_post_type( $post ) == 'giocatori'){
            get_template_part( 'content', 'giocatore' );
          }else{
				    get_template_part( 'content', get_post_format() );
          } 
				?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
