<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fancy Lab

 */

get_header();
?>

<div class="content-area" id="primary">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php 
                
                while( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content', 'single' );

                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                }

                ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>