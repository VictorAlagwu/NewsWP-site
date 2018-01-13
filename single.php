<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TPM
 */

get_header(); ?>

<div class="row content">
 <!-- Section for Main Content/Others -->
   <div class="col-sm-8">
      <h3>TPM DC</h3>
      <hr>
        <!-- First Row -->
        <div class="row">
          <div class="col-sm-12 top-post">

          <?php while ( have_posts() ) : the_post(); ?>
                <?php //get_template_part( 'template-parts/content', get_post_type() ); ?>
                <?php if(is_singular()):?>
                        <h3><p class="top-post-title"><?php the_title(); ?></p></h3>
                        <p class="top-post-category"><?php the_category(); ?></p>
                        
                         <div class="single-top-post-body"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div>
                <?php else: echo"No POst"; ?>
                <?php endif;?>
          <?php endwhile; // End of the loop. ?>
          </div>
        </div><!-- /First Row -->  
            <br>
            <div class="author_side">
                <h3>ABOUT THE AUTHOR</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 author-image">
                            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/author-image.webp">
                        </div>
                                <div class="col-sm-9 author-bio">
                                        <p class="author-bio-name"><?php the_author();?></p>
                                        <p class="author-bio-details">Alice Ollstein is a reporter at Talking Points Memo, covering national politics. She graduated from Oberlin College in 2010 and has been reporting in DC ever since, covering the Supreme Court, Congress and national elections for TV, radio, print, and online outlets. Her work has aired on Free Speech Radio News, All Things Considered, Channel News Asia, and Telesur, and her writing has been published by The Atlantic, La Opinión, and The Hill Rag. She was elected in 2016 as an at-large board member of the DC Chapter of the Society of Professional Journalists. Alice grew up in Santa Monica, California and began working for local newspapers in her early teens.</p>
                                </div>
                                </div>
                                
                        </div>
                        <hr>
                        <span>LIKE US ON FACEBOOK</span><span class="fa fa-facebook-square fa-3x"></span><span style="float: right;"><i class="fa fa-comment fa-3x"></i> <i class="fa fa-facebook-square fa-3x"></i>  <i class="fa fa-twitter-square fa-3x"></i> <i class="fa fa-pinterest-square fa-3x"></i></span>
                        <hr>

                        <div class="advert_again">
                                
                        </div>
                        <div class="comment">
                                <p>73 replies<span class="" style="float:right;">Full Discussion</span></p>
                                <hr>
                                <div class="row">
                                        <div class="col-sm-3 text-center">
                                                <img class="rounded-circle img-fluid" width="50%" src="<?php bloginfo('template_url'); ?>/assets/images/author-image.webp">
                                        </div>
                                        <div class="col-sm-9">
                                                <p class="comment-author-name">Victor</p>
                                                <p class="comment-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-sm-3 text-center">
                                                <img class="rounded-circle img-fluid" width="50%" src="<?php bloginfo('template_url'); ?>/assets/images/author-image.webp">
                                        </div>
                                        <div class="col-sm-9">
                                                <p class="comment-author-name">Victor</p>
                                                <p class="comment-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                </div>
                                <hr>
                                <div class="row">
                                        <div class="col-sm-3 text-center">
                                                <img class="rounded-circle img-fluid" width="50%" src="<?php bloginfo('template_url'); ?>/assets/images/author-image.webp">
                                        </div>
                                        <div class="col-sm-9">
                                                <p class="comment-author-name">Victor</p>
                                                <p class="comment-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                </div>
                                <hr>
                                <p>Full Comments</p>
                        </div>


                </div>


                <!-- /Main Content/Others -->








<?php get_template_part('template-parts/sidebar','post');?>
</div>
<?php get_footer(); ?>
