<?php
/*
Template Name: Home Page
*/
get_header(); 
?>
<div class="content-area">
    <main>
        <section class="slider">
            <!-- Place somewhere in the <body> of your page -->
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    
                    for( $i = 1; $i < 4; $i++ ) {
                        // Getting data from Customizer to display the Slider section
                        $slider_page[$i]        = get_theme_mod( 'set_slider_page' . $i );
                        $slider_button_text[$i] = get_theme_mod( 'set_slider_button_text' . $i );
                        $slider_button_url[$i]  = get_theme_mod( 'set_slider_button_url' . $i );
                    }

                    $args = [
                        'post_type'         => 'page',
                        'posts_per_page'    => 3,
                        'post__in'          => $slider_page,
                        'orderby'           => 'post__in'
                    ];
                    
                    $slider_loop = new WP_Query( $args );
                    $j = 1;
                    if( $slider_loop->have_posts() ) {
                        while( $slider_loop->have_posts() ) {
                            $slider_loop->the_post();

                        ?>

                            <li>
                                <?php the_post_thumbnail( 'fancy-lab-slider', [ 'class' => 'img-fluid' ] ); ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a href="<?php echo esc_url( $slider_button_url[$j] ); ?>" class="link"><?php echo esc_html( $slider_button_text[$j] ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        <?php 
                        $j++;
                        }
                        wp_reset_postdata();
                    }

                    ?>
                </ul>
            </div>
        </section>

        <section class="popular-products">
            <div class="container">
                <h2>Popular Products</h2>
                <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
            </div>
        </section>

        <section class="new-arrivals">
            <div class="container">
                <h2>New Arrivals</h2>
                <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date"]' ); ?>
            </div>
        </section>

        <section class="deal-of-the-week">
            <div class="container">
                <div class="row">
                    Deal of the Week
                </div>
            </div>
        </section>

        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <?php
                    // if there are any posts
                    if ( have_posts() ) {
                        // Load posts loop
                        while ( have_posts() ) {
                            the_post();
                            ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div><?php the_content(); ?></div>
                                </article>
                                <br>
                            <?php
                        }
                    } else {
                        ?>
                        <p>Nothing to display.</p>
                        <?php
                    }

                    ?>
                </div>
            </div>
        </section>
        
    </main>
</div>
<?php get_footer(); ?>