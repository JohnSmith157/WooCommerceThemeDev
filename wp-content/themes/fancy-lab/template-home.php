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

        <?php 
        
        if( class_exists( 'WooCommerce' ) ) { 
            
        ?>
            <section class="popular-products">
                <?php
                    // Display the maximum article number and the column number
                    $popular_limit              = get_theme_mod( 'set_popular_max_num', 4 );
                    $popular_col                = get_theme_mod( 'set_popular_max_col', 4 );
                    $arrivals_limit             = get_theme_mod( 'set_new_arrivals_max_num', 4 );
                    $arrivals_col               = get_theme_mod( 'set_new_arrivals_max_col', 4 );

                    // Display customized titles for each section
                    $popular_title              = esc_html( get_theme_mod( 'set_popular_title', __( 'Popular Products', 'fancy-lab' ) ) );
                    $arrival_title              = esc_html( get_theme_mod( 'set_new_arrivals_title', __( 'New Arrivals', 'fancy-lab' ) ) );
                    $deal_of_the_week_title     = esc_html( get_theme_mod( 'set_deal_of_the_week_title', __( 'Deal of the Week', 'fancy-lab' ) ) );
                ?>

                <div class="container">
                    <div class="section-title">
                        <h2><?php echo $popular_title; ?></h2>
                    </div>            
                    <?php echo do_shortcode( '[products limit=" ' . esc_attr ( $popular_limit ) . ' " columns=" ' . esc_attr ( $popular_col ) . ' " orderby="popularity"]' ); ?>
                </div>

            </section>

            <section class="new-arrivals">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo $arrival_title; ?></h2>
                    </div>
                    <?php echo do_shortcode( '[products limit=" ' . esc_attr ( $arrivals_limit )  . ' " columns=" ' . esc_attr ( $arrivals_col )  . ' " orderby="date"]' ); ?>
                </div>
            </section>
            
            <?php 
            
            $showdeal           = get_theme_mod( 'set_deal_show', 0 );
            $deal               = get_theme_mod( 'set_deal' );
            $currency           = get_woocommerce_currency_symbol();
            $regular            = get_theme_mod( $deal, '_regular_price', true );
            $slider_page        = get_theme_mod( $deal, '_sale_price', true );
            

            if( $showdeal == 1 && ( !empty( $deal ) ) ) {
                // If statement in order to avoid the divided-by-zero error
                if ( is_numeric ( $sale ) && is_numeric( $regular ) ) {
                    $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );
                } else {
                    $discount_percentage = 0;
                } // ( $regular - $sale ) != 0 &&
                
            ?>

                <section class="deal-of-the-week">
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo $deal_of_the_week_title; ?></h2>
                        </div>
                        
                        <div class="row d-flex align-items-center">
                            <div class="deal-img col-md-6 col-12 ml-auto text-center">
                                <?php echo get_the_post_thumbnail( $deal, 'large', [ 'class' => 'img-fluid' ] ); ?>
                            </div>

                            <div class="deal-desc col-md-4 col-12 mr-auto textcenter">
                                <?php 

                                if( !empty( $sale ) ) { 
                                
                                ?>

                                    <span class="discount">
                                        <?php echo esc_html( $discount_percentage ) . esc_html_e( '% OFF', 'fancy-lab' ); ?>
                                    </span>
                                        
                                <?php
                                }
                                ?>

                                <h3>
                                    <a href="<?php echo esc_url( get_permalink( $deal ) ); ?>">
                                        <?php echo esc_html( get_the_title( $deal ) ); ?>
                                    </a>
                                </h3>

                                <p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>

                                <div class="prices">
                                    <span class="regular">
                                        <?php 
                                        echo esc_html( $currency );
                                        echo esc_html( $regular );
                                        ?>
                                    </span>

                                    <?php
                                    
                                    if( !empty( $sale ) ) {

                                    ?>
                                        <span class="sale">
                                            <?php 
                                            echo esc_html( $currency );
                                            echo esc_html( $sale );
                                            ?>
                                        </span>
                                    <?php 
                                    }
                                    ?>
                                </div>

                                <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart">
                                    <?php esc_html_e( 'Add to Cart', 'fancy-lab' ); ?>    
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
            <?php 
            }
            ?>

        <?php

        }

        ?>

        <section class="lab-blog">
            <div class="container">
                <div class="section-title">
                    <h2><?php echo esc_html( get_theme_mod( 'set_blog_title', __( 'News From Our Blog', 'fancy-lab' ) ) ); ?></h2>
                </div>
                <div class="row">
                    <?php

                    $args = [
                        'post_type'         => 'post',
                        'posts_per_page'    => 2,

                    ];

                    $blog_posts = new WP_Query( $args );

                    // if there are any posts
                    if ( $blog_posts->have_posts() ) {
                        // Load posts loop
                        while ( $blog_posts->have_posts() ) {
                            $blog_posts->the_post();
                            ?>
                                <article class="col-12 col-md-6">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        
                                        if( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'fancy-lab-blog', [ 'class' => 'img-fluid' ] );
                                        }

                                        ?>
                                    </a>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>
                                </article>
                                <br>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        ?>
                        <p><?php esc_html_e( 'Nothing to display', 'fancy-lab' ); ?>.</p>
                        <?php
                    }

                    ?>
                </div>
            </div>
        </section>
        
    </main>
</div>
<?php get_footer(); ?>