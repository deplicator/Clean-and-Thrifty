<?php get_header(); ?>

    <div class="main">
        <?php wp_nav_menu(); ?>
        
        <div id="content-column">
	
    		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    			<?php /* If this is a category archive */ if (is_category()) { ?>
    				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
    			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    				<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
    			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    				<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
    			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    				<h2>Archive for <?php the_time('Y'); ?>:</h2>
    			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    				<h2>Author Archive</h2>
    			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    				<h2>Blog Archives</h2>
    		<?php } ?>
    	
    		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    		
    		<?php include 'post.php' ?>
    		
            <?php endwhile; ?>
                <div class="navigation">
            		<?php posts_nav_link(' | '); ?>
            	</div>
        	<?php else: ?>
                <p><?php _e('Sorry, no post found.'); ?></p>
            <?php endif; ?>
        
        </div>

</div>

<?php get_footer(); ?>