<?php get_header(); ?>
<section class="about-sec" id="about">
			<div class="container">
				<div class="row">
					<div class="about-img">
						<img src="<?php echo get_field('image_about'); ?>">
						<div class="about-pattern">
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/about-pattern.png">
						</div>
					</div>
					<div class="about-text">
						<h6><?php echo get_field('heading_about'); ?></h6>
						<h5><?php echo get_field('sub_heading_about'); ?>
						</h5>
						<h4><?php echo get_field('designation_about'); ?></h4>
						<p><?php echo get_field('description_about'); ?></p>
					</div>
				</div>
			</div>
		</section>


		<section class="overview-sec" id="overview">
			<div class="container">
				<div class="row">
					<div class="overview-img">
						<img src="<?php echo get_field('image_ov'); ?>">
						
					</div>
					<div class="overview-text">
						<h6><?php echo get_field('title_ov');  ?></h6>
					    <?php echo get_field('description_ov');   ?>
					</div>
				</div>
			</div>
		</section>


		<section class="gain-from-sec">
			<div class="container">
				<div class="row">
					<div class="gain-from-img">
						<img src="<?php echo get_field('images_book'); ?>">
						
					</div>
					<div class="gain-from-text">
						<h6><?php echo get_field('title_book'); ?></h6>
						<?php echo get_field('description_book'); ?>
					</div>
				</div>
			</div>
		</section>


		<section class="influencer-sec" id="influencer">
			<div class="container">
				<div class="row">
					<div class="influencer-img">
						<img src="<?php echo get_field('image_in'); ?>" class="img-fluid">
						
					</div>
					<div class="influencer-text">
						<h6><?php echo get_field('title_in'); ?></h6>
						<div class="row">
							<div class="col-6">
							<?php echo get_field('influencer_1'); ?>
							</div>
							<div class="col-6">
							<?php echo get_field('influencer_2'); ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="podcast-sec" id="podcast">
			<div class="container">
				<div class="heading">
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/mic.png" width="180">
					<h6>PODCAST</h6>
				</div>
				<?php
				
				wp_reset_query();
				$args = array(
					'post_type'=>'post',
					'posts_per_page' => 3
				);
				
				$query = new WP_Query( $args );
										if ($query->have_posts()) {
										   

 while ($query->have_posts()) {
    $query->the_post();
        ?>

				<div class="pod-item">
					<div class="pod-image">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
					</div>
					<div class="pod-text">
						<h5>Posted on <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></h5>
						<h3><?php the_title(); ?></h3>
						 <?php the_content(); ?>
						<ul>
							<li> <img src="<?php echo get_bloginfo('template_url'); ?>/images/like.png"> Like</li>
							<li><img src="<?php echo get_bloginfo('template_url'); ?>/images/share.png"> Share</li>
						</ul>
					</div>
				</div>
				<?php }} wp_reset_query(); ?>

			</div>
		</section>
		<section class="testi-sec" id="testi">
			<div class="container">
				<div class="row">
				<?php
                                
								$x=1; 
								 if (have_rows("testimonial")):
									 while (have_rows("testimonial")):
								 the_row(); 
								 
								 
								 ?>
					<div class="testi<?php echo $x; ?>">
						<div class="testi-outer">
							<img class="testi-img" src="<?php echo get_sub_field('image_testi'); ?>">
							<?php echo get_sub_field('message_testi'); ?>
						</div>
					</div>
					<?php $x++;
                 endwhile; endif; ?>
				</div>
			</div>
		</section>

		<section class="buynow-sec" id="buynow">
			<div class="container">
				<div class="row">
					<div class="col-6 buynow-left">
						<div class="brand-cont">
							<h2 class="grad-text"><?php echo get_field('title_bn'); ?></h2>
							<h5><?php echo get_field('sub_title_bn'); ?></h5>
						</div>
						<h4><?php echo get_field('text_bn'); ?></h4>
					</div>
					<div class="col-6 buynow-right">
						<a href="<?php echo get_field('button_link_bn'); ?>" class="primary-btn"><?php echo get_field('button_text_bn'); ?> <img src="<?php echo get_field('button_image'); ?>" width="36"> </a>
						<a href="<?php echo get_field('button_url_2'); ?>" class="blue-btn"><?php echo get_field('button_text_2_bn'); ?> <img src="<?php echo get_field('button_image_2_bn'); ?>" width="36"> </a>
					</div>
				</div>
			</div>
		</section>

		<?php get_footer(); ?>