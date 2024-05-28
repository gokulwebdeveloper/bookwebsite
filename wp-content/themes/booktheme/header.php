<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>RV - Ranghan Venkatraman</title>

		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url'); ?>/images/favicon.png">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<link href="<?php echo esc_url(get_template_directory_uri()."/css/menu1.css"); ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/style.css"); ?>">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()."/css/font-style.css"); ?>">



		<script src="<?php echo esc_url(get_template_directory_uri()."/js/jquery.js"); ?>"></script>
<?php wp_head(); ?>
	</head>


	<body>
		<header class="main-head">
			
			<nav>
				<div class="wrapper">
				  <div class="logo"><a href="<?php echo get_bloginfo('template_url'); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" class="img-fluid" width="200"></a></div>
				  <input type="radio" name="slider" id="menu-btn">
				  <input type="radio" name="slider" id="close-btn">
				  <ul class="nav-links">
					<label for="close-btn" class="btn close-btn">X</label>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#overview">Overview</a></li>
					<li><a href="#influencer">Influencer</a></li>
					<li><a href="#podcast">Podcast</a></li>
					<li><a href="#testi">Testimonials</a></li>
					<li><a href="#buynow">Buy Now</a></li>
					<li><a href="#contact">Contact</a></li>		
				  </ul>
				  <label for="menu-btn" class="btn menu-btn">Menu</label>
				  
				</div>
			</nav>
		</header>

		<section class="hero-section" id="home">
			<div class="container">
				<div class="row align-items-center">
					<div class="hero-text">
						<h1>
							<?php echo get_field('heading_b'); ?>
						</h1>
						<h4><?php echo get_field('sub_heading_b'); ?></h4>
						<p><?php echo get_field('description_b'); ?></p>
						<a href="<?php echo get_field('button_link_b'); ?>" class="primary-btn"><?php echo get_field('button_text_b'); ?></a>
					</div>
					<div class="hero-img">
						<img src="<?php echo get_field('photo_banner'); ?>" class="img-fluid">
					</div>
				</div>
			</div>
		</section>