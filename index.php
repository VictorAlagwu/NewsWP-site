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
 <div class="row content">
 	
		<!-- Section for Main Content/Others -->
		<div class="col-sm-9">
			<!-- First Row -->
			<div class="row">
				<div class="col-sm-3 recent-title">
					<p>
					<p>Politics On Display As Letterman Receives Mark Twain Prize</p>
  					<img class="rounded img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/left1.webp"" alt=""></p>
  					<p>
					<p>Senate Moves Forward On $36.5 Billion Disaster Relief Package</p>
  					<img class="rounded img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/left2.webp"" alt=""></p>
  					<p>
					<p>CNN: EPA To Hire 12 More Security Agents For Cheif Pruitt</p>
  					<img class="rounded img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/left3.webp"" alt=""></p>

				</div>
				<div class="col-sm-9 top-post">
					<?php if (is_home() || is_front_page()): ?>
						<?php if ( have_posts() ) : the_post(); ?>
						<h3><p class="top-post-title"><a style="color: black;" href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></p></h3>
						<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/600x240.webp">
						<div class="top-post-body"><?php  the_content(); ?></div>
					<?php endif; // End of the loop. ?>
					<?php else: echo "No recent post";?>
					<?php endif;?>
					
			
					
				</div>
			</div><!-- /First Row -->
			<br>
			<div class="row">
				<div class="col-sm-6">
					<hr class="hr-bold">
					<h3 class="text-center">Editors' Blog</h3>
					<hr class="hr-bold">
					<?php get_template_part('template-parts/content','editor');?>
				</div>
				<div class="col-sm-6">
					<!--   Summary Post with only image and author name-->
					<?php if ( have_posts() ) : ?>
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<p class="summary-post">
						<p class="summary-post-title"><a href="<?php the_permalink(); ?>" style="color: black;"> <?php echo the_title(); ?></a></p>
						<!-- <img class="img-fluid text-center" src="<?php //bloginfo('template_url'); ?>/assets/images/300x150-1.webp"> -->
						<?php if ( has_post_thumbnail() ) { ?>
    						<a href="<?php the_permalink(); ?>">
    							<?php the_post_thumbnail('medium',array('width'=>'240','height'=>'120','class' => 'img-fluid thumb_image')); ?>	
    			     		</a>
						<?php }else{ ?>
						 <img class="img-fluid text-center" src="<?php bloginfo('template_url'); ?>/assets/images/300x150-1.webp">
						<?php }?>
						<p class="summary-post-author">BY <?php the_author(); ?></p>
					    </p>
					    <br>
					<?php endwhile; ?>
					<?php // the_posts_navigation();?>
					<!-- Add the pagination functions here. -->
						<div class="text-center">
							<?php b4st_pagination();?>
						</div>
					<?php else : ?>
				    <?php endif; ?>
				</div>
			</div>



		</div>


		<!-- /Main Content/Others -->



<?php get_sidebar();?>

 </div>
	<div class="row misc">
		<div class="col-sm-12">
			<hr class="hr-bold">
				<h3 class="text-center">Don't Miss</h3>
			<hr class="hr-bold">
			<?php get_template_part('template-parts/misc','miss');?>
		   <div class="row mini_blogs">
		   		<div class="col-sm-12">
		   			<hr class="hr-bold">
		   			<h3 class="text-center">Mini - Blogs</h3>
		   			<hr class="hr-bold">
		   			<div class="row">
		   				<?php get_template_part('template-parts/misc','blog');?>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/1000x240.jpg"></div>
					</div>
		   		</div>
			
			</div>
			<br>
			<br>
			<hr class="hr-bold">
			<h3 class="text-center">TPM DC</h3>
			<hr class="hr-bold">
			<div class="row tpm_data">
				<div class="col-sm-4"><p class="tpm_title">
Can A Pro-Choice, Pro-Immigrant, Climate Change Believer Beat Roy Moore In Alabama?</p><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/300x150-7.webp"></div>
				<div class="col-sm-4"><p class="tpm_title">Trump Admin Tells Court Only Congress Can Pay Health Insurers What They're Owed</p><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/300x150-16.webp"></div>
				<div class="col-sm-4"><p class="tpm_title">Under Trump, Uninsured Rate Rises For First Time Since Obamacare Took Effect</p><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/300x150-9.webp"></div>
			</div>
			<br>
		</div>
	</div>
<?php get_footer(); ?>

