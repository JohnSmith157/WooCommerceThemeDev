<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fancy Lab
 */

get_header(); 
?>
<div class="content-area">
    <main>
        
        <div class="container">
            <div class="row">

                <h1><?php _e( 'Search results for', 'fancy-lab' ); ?>: <?php echo get_search_query(); ?></h1>

                <?php

                get_search_form();

                // if there are any posts
                if ( have_posts() ) {
                    // Load posts loop
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    }
                    the_posts_pagination( [
                        'prev_text'     => __( 'Previous', 'fancy-lab' ),
                        'next_text'     => __( 'Next', 'fancy-lab' )
                    ] );
                } else {
                    ?>
                    <p><?php _e( 'There is no results for your query', 'fancy-lab' ); ?>.</p>
                    <?php
                }

                ?>
            </div>
        </div>
        
        
    </main>
</div>
<?php get_footer(); ?>