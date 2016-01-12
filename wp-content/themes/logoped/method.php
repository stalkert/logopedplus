<?php /*
Template Name: method
*/?>
<?php get_header(); ?>
			<div class="row" id="content">
				<div id="head-foto" class="col-md-5" >
					<img src="<?php bloginfo( 'template_url' ); ?>/images/method.jpg">
				</div>
				<div class="col-md-7">
					<div id="method"><?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						<?php endwhile; ?>			
						<?php endif; ?>
						</div>
					
				</div>
			</div>
		</div>
		</div>
<?php get_footer(); ?>