<?php get_header(); ?>

    <div class="main">
        <?php wp_nav_menu(); ?>
        <div id="content-column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php include 'post.php' ?>
            
            <?php endwhile; ?>
                <div class="navigation">
            		<?php posts_nav_link(' | '); ?>
            	</div>
        	<?php else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>