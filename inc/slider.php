<?php

/*
Template Name: Posts Slider
*/
get_header(); 
?>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        // Define our WP Query Parameters
        $thcarousel = new WP_Query('posts_per_page=3', array(
            // this the one in register post type in slider.php in functions
            'post_type' => 'thcarouselpost',

        ));

        $korim = 0;
        while ($thcarousel->have_posts()) : $thcarousel->the_post();
            $korim++
        ?> <?php if ($korim == 1) : ?>
                <div class="carousel-item active" data-bs-interval="1000">
                <?php else : ?>
                    <div class="carousel-item">
                      <?php endif; ?>
                      <a href="<?php the_permalink() ?>"><?php the_title(); ?><?php echo the_content('medium', array(
                        'class' => 'text-center img-fluid shadow-5-strong rounded-5 mb-1 d-block w-100 h-100',
                        'loading' => 'lazy',
                        'alt' => 'post-thumbnail',
                        'style' => 'max-width:600px;max-height:500px;'
                        )); ?>                                         
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                  <?php
            endwhile;
                ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
    </div>