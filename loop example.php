<?php 
get_header();
    
    if ( have_posts() ) : // are there posts?
        while ( have_posts() ) : // are there more to show?
            the_post(); // set the current post

            the_title(); // show the title
            the_content(); // show the content

        endwhile; // end the loop
    else :
        // show something if there's no posts for this page
    endif;
    

get_sidebar();
get_footer(); ?>