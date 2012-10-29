<!-- Inserted into pages (and the index.php) so that all post are uniform. -->

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

        <?php
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if($categories){
            	foreach($categories as $category) {
            		$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
            	}
            echo trim($output, $separator);
            }
        ?>
    </div>
</div>