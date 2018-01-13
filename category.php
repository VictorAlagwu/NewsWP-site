<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package News Site
 */
 ?>

 <?php get_header(); ?>
 <h3>Category: <?php single_cat_title(); ?></h3>
 <hr>
 <div class="row content">
 		
		<!-- Section for Main Content/Others -->
		<div class="col-sm-8">
			<!-- Start Category Looping -->
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-sm-3 text-center">
					<img class="img-fluid"  src="<?php bloginfo('template_url'); ?>/assets/images/cat4.jpg">
				</div>
				<div class="col-sm-9">
					<p class="post-title"><a style="color: black;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<p class="post-create">By&nbsp;<span class="post-author"><?php the_author(); ?></span> Published<span class="post-date">  <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y')?>&nbsp;<?php the_time('g: i a')?></time></span></p>
					<div class="post-detail"><?php the_excerpt(); ?></div>
				</div>
			</div>
			<hr>
			<?php endwhile; ?>
			
			<!-- Add the pagination functions here. -->
			
			<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
			  <ul class="pagination">
			    <li class="page-item older">
			      <?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
			    <li class="page-item newer">
			      <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
			  </ul>
  				<?php } ?>
			<?php else :  echo "No Post for this category"; ?>
		    <?php endif; ?>

			<!-- /Category Looping -->
		</div>


		<!-- /Main Content/Others -->

<?php get_template_part('template-parts/sidebar','post');?>

 </div>
<?php get_footer(); ?>

