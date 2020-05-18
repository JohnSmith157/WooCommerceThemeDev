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
                    <li>
                    <img src="slide1.jpg" />
                    </li>
                    <li>
                    <img src="slide2.jpg" />
                    </li>
                    <li>
                    <img src="slide3.jpg" />
                    </li>
                    <li>
                    <img src="slide4.jpg" />
                    </li>
                </ul>
            </div>
        </section>

        <section class="popular-products">
            <div class="container">
                <div class="row">
                    Popular Products
                </div>
            </div>
        </section>

        <section class="new-arrivals">
            <div class="container">
                <div class="row">
                    New Arrivals
                </div>
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