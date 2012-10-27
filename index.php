<?php get_header(); ?>

    <div class="main">
        <?php wp_nav_menu(); ?>
	
        <div id="content-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="post">
			 <div class="title-bar">
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
            </div>

                <div class="entry">
                    <?php the_content(); ?>
                </div>
                <div class="comment">
                    <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </div>
            </div>
			
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>

		</div>
	
	</div>

<?php get_footer(); ?>