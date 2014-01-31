<?php get_header(); ?>

<div class="main">
    <?php wp_nav_menu(); ?>

    <div id="content-column">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="page">

                <?php the_content(); ?>
            
        </div>
        
        <?php endwhile; else: ?>
        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>