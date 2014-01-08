<?php
/*
Template Name: Comunicati
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Allievi_Pozzo
 * @since Allievi Pozzo 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
      
			<?php /* The loop */ ?>
      <?php
        $args = array(
          		'post_type' => 'comunicati',
          		'post_status' => 'publish',
          		'posts_per_page' => -1,
          		'orderby' => 'date',
          		'order' => 'DESC',
          );
        query_posts($args);
      ?>
      <article>
        <header class="entry-header">
          <p style="text-align:center;padding-top:15px;"><?php echo get_the_post_thumbnail(46, 'thumbnail'); ?></p>
          <h1>Elenco comunicati ufficiali dalla F.I.G.C.</h1>
          <p>Clicca sulla prima icona per visualizzare direttamente sul browser, oppure sulla seconda per scaricare il documento.</p>
        </header><!-- .entry-header -->
        <ul class="entry-content" style="list-style-type:none;">
			<?php while ( have_posts() ) : the_post(); ?>
      <?php
        $post_type = get_post_type_object( get_post_type($post) );
      ?>
          <li style="margin-top:15px;">
            <span class="comunicato_view" style="padding:5px;">
              <a href="<?php echo get_post_meta( $post->ID, 'link_visualizza', true );?>" title='<?php get_the_title(); ?>' target="_blank"><img src="/wp-content/themes/AllieviPozzo/images/lente_thumb.png" alt="Visualizza" width="25px"></a>
            </span>
            <span class="comunicato_download" style="padding:5px;">
              <a href="<?php echo get_post_meta( $post->ID, 'link_download', true );?>" title='<?php get_the_title(); ?>' target="_blank"><img src="/wp-content/themes/AllieviPozzo/images/download_thumb.png" alt="Download" width="25px"></a>
            </span>
            <span class="comunicato_title" style="padding:5px;">
              <?php the_title(); ?>
            </span>
          </li>
<?php /*
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h4 class="entry-title"><?php the_title(); ?></h4>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
*/ ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
        </ul>
      </article>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
