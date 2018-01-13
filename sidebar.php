<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TPM
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>



		<!-- Section For Side Content-->
		<div class="col-sm-3 side-content">
			<div class="row">
				<p class="side_advert">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/sideadvert.jpg">
			    </p>
			</div>
			<div class="row">
				<hr class="hr-bold">
				<h3 class="text-center">Editors' Blog</h3>
				<hr class="hr-bold">
				<?php get_template_part('template-parts/sidebar','editor');?>
			</div>
			<div class="row">
				<hr class="hr-bold">
				<h3 style="text-align: center;">Cafe</h3>
				<hr class="hr-bold">
				<?php get_template_part('template-parts/sidebar','cafe');?>
			</div>
			<div class="row popular-posts">
				<hr class="hr-bold">
				<h3>Most Popular</h3>
				<hr class="hr-bold">
				<?php get_template_part('template-parts/sidebar','popularpost');?>
			</div>
			<div class="row world_news">
				<hr class="hr-bold">
				<h3>World News</h3>
				<hr class="hr-bold">
				<p>Malta Asks FBI To Help Investigate Car Bombing That Killed Reporter</p>
				<p>More Than 300 Die In Somalia Truck Bombing, Many Remain Missing</p>
				<p>Official: 5 Civilians Wounded In Rocket Attack At Kabul Airport Amid Mattis Visit</p>
				<p>Saudi Arabia To Let Women Drive For 1st Time In Ultra-Conservative Kingdom</p>
				<p>Russia Threatens To Block Facebook If Platform Refuses To Store Data Locally</p>
				<p>Puerto Rico Left In Dark With Most Power Still Out After Maria</p>
			</div>
			<div class="row newsletter text-center">
				<img  class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/newsletter.svg">
				<br>
				<p></p>
				<div class="col-sm-9">
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Enter Email">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<button class="btn btn-default" style="color: red;" name="Subscribe">Subscribe</button>
					</div>
				</div>
			</div>
			
		
		</div><!-- /Side-Content -->



<!-- 
<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside>--><!-- #secondary -->