<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package T
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<div class="row header">
	     <div class="col-sm-3">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/tpm.svg" style="width: 150%;height:70%;">
			
		</div>
		<div class="col-sm-9">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/tpm_long.jpg" style="width: 285%;height: 90%; padding-bottom: 30px;">
		</div>
	</div>
	<hr>
	<div class="row navigation" style="font-family:Helvetica;">
		<div class="col-sm-12">
			  <nav class="navbar navbar-light bg-transparent py-0">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			      <i class="fa fa-bars" aria-hidden="true"></i>
			    </button>
		    <a class="navbar-brand py-0" href="index.php">NewsSite</a>
		    <div class="col-sm-3 col-md-3 pull-right">
		        <form class="navbar-form py-0" role="search">
		        <div class="input-group">
		            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
		            <div class="input-group-btn">
		                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		            </div>
		        </div>
		        </form>
        	</div>
	        <div class="collapse navbar-collapse" id="navbarNav">
	             <ul class="navbar-nav mr-auto">
	                <li class="nav-item active"><a class="nav-link py-0" href="single.php">Single</a></li>

	                
	                <li class="nav-item "><a class="nav-link py-0" href="categories.php">Categories</a></li>
	                
	                
	                <li class="nav-item "><a class="nav-link py-0" href="login.php">Login</a></li>
	                <li class="nav-item "><a class="nav-link py-0" href="register.php">Register</a></li>
	                          
	    		</ul>
	    	</div>
		  </nav>
		</div>
	</div>
	<hr class="hr-bold">
	<div class="row advert">
		<div class="col-sm-12 text-center">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/1000x240.jpg">
		</div>	
	</div>
	<br>
