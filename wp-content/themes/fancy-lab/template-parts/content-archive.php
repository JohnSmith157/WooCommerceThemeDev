<?php
/**
 * The template for displaying archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab

 */
?>
<article <?php post_class(); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>        
    </h2>
    <div class="post-thumbnail">
        <?php

        if( has_post_thumbnail() ) {
            the_post_thumbnail( 'fancy-lab-blog', ['class' => 'img-fluid'] );
        }

        ?>
    </div>
    <div class="meta">
        <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
            <br />
            <?php if( has_category() ) { ?>
                Categories: <span><?php the_category( ' ' ); ?></span>
            <?php } ?>
            <br />
            <?php if( has_tag() ) { ?>
                Tags: <span><?php the_tags( '', ', ' ); ?></span>
            <?php } ?>
        </p>
    </div>
    <div><?php the_excerpt(); ?></div>
</article>
<br>