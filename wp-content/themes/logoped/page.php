<?php get_header();?>
			<div class="row" id="content">
				<div class="col-md-12">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					<?php endwhile; ?>			
					<?php endif; ?>
				</div>
				
			</div>
		</div>
		</div>
<?php get_footer(); ?>