		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  Template Name: Front-page
		 * 
		 *  @package lawyeria-lite
		 */
		get_header();?>
			<div id="subheader" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
				    echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
			     }
			 ?>');">
				<div class="subheader-color cf">
					<div class="wrapper cf">
						<div class="full-header-content full-header-content-no-sidebar">
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' ) ) {
										echo '<h3>';
										echo get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' );
										echo '</h3>';
									}
								?>
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' )) {
										echo '<p>';
											echo get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' );
										echo '</p>';	
									}
								?>
						</div><!--/div .header-content-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->
			</div><!--/div #subheader-->
		</header><!--/header-->
		<section class="last-news">
			<div class="wrapper cf">
				<h2>Últimas Notícias</h2>
				<?php $args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 12
					);
				$query = new WP_Query( $args );
				?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<a href="<?php the_permalink();?>" class="each-post">
						<div class="all-post">
							<div class="each-image">
								<?php the_post_thumbnail( 'medium' );?>
							</div><!-- .each-image -->
							<div class="each-title">
								<h3>
									<?php the_title();?>
								</h3>
							</div><!-- .each-title -->
						</div><!-- .all-post -->
					</a>
				<?php endwhile; wp_reset_postdata(); endif;?>
				<a href="<?php echo home_url( '/blog');?>" class="big-btn">
					Ver todas
				</a>
			</div><!-- .wrapper cf -->
		</section><!-- .last-news -->
		<br><br>
		<section id="content">
			<div class="wrapper">
				<div class="content-article cf" role="main">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' )) {

								echo '<div class="content-article-image">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" />';
									
								echo '</div>';	
							
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ) ) {
							
								echo '<h3>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' );
									
								echo '</h3>';	
							}

							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ) {
							
								echo '<p>';
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' );
								echo '</p>';	
							}
						?>
					
				</div><!--/div .content-article .cf-->


			</div><!--/div .wrapper-->
		</section><!--/section #content-->

		<?php get_footer(); ?>