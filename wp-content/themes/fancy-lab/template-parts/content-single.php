<?php
/**
 * The template for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab

 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p>Published by <?php the_author_posts_link(); ?>  on <?php echo get_the_date(); ?><br />
            Categories: <span><?php the_category( ' ' ); ?></span><br/>
            <?php if( has_tag() ) { ?>
                Tags: <span><?php the_tags( '', ', ' ); ?></span>
            <?php } ?>
            </p>
        </div>

        <div class="post_thumbnail">
            <?php
            if( has_post_thumbnail() ) {
                the_post_thumbnail( 'fancy-lab-blog', [ 'class' => 'img-fluid' ] );
            }

            ?>
        </div>
    </header>
    
    <div class="content">
            <?php 
            
            wp_link_pages(
                [
                    'before'        => '<p class="inner-pagination">' . 'Pages',
                    'after'         => '</p>'
                ]
                );

            ?>
        <?php the_content(); ?>
    </div>

</article>