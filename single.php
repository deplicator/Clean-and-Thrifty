<?php get_header(); ?>

    <div class="main">
        <?php wp_nav_menu(); ?>
	
        <div id="content-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="post">
                <!-- Display the Title as a link to the Post's permalink. -->
                <h3>
                    <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
		
                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                <div class="by-line">
                    <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
                </div>

                <div class="entry">
                    <?php the_content(); ?>
                </div>
                
				<p class="postmetadata">
				<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>

			</div>
			

			<div class="comments-template">
				<h2>What do you think?</h2>
					<?php comments_template(); ?>
			</div>
			
		</div>

	</div>

<?php endwhile; ?>
	
	<div class="navigation">	
		<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
	</div>

<?php endif; ?>
</div>

<?php get_footer(); ?>