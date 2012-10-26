<?php get_header(); ?>

	<div id="blog">
	
		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<div class="post">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
				<div class="entry">	
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>

					<p class="postmetadata">
					<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
					</p>

				</div>
			</div>
		

		<?php endwhile; ?>
	
		
		<?php endif; ?>
		
	</div>

<?php get_footer(); ?>