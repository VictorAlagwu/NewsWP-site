<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TPM
 */

?>

<p class="summary-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			
		else :
			the_title( '<p class="summary-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
</p><!-- #post-<?php the_ID(); ?> -->
