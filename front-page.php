<?php /* Template Name: Front-page Template */ ?>

<?php get_header(); ?>

<main class="site-content" role="main">

    <!-- first section with slick slider-->
    <section class="main-section">
        <div id="slider">
        <div class="slider-for">
            <div>
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-1.png" alt="main-image">
            <p class="slider-card-text">Cursus penati saccum ut curabitur nulla.</p>
            </div>
            <div>
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-2.png" alt="main-image">
            <p class="slider-card-text">Cursus penati saccum ut curabitur nulla.</p>
            </div>
            <div> 
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-3.png" alt="main-image">
            <p class="slider-card-text">Cursus penati saccum ut curabitur nulla.</p>
            </div>
            <div>
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-4.png" alt="main-image">
                <p class="slider-card-text">Cursus penati saccum ut curabitur nulla.</p>
            </div>
        </div>

        <div class="slider-nav">
            <div>
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-1.png" class="card-img-bottom" alt="main-image">
                <div class="slider-nav-link-item">
                    <a href="<?php echo get_the_permalink();?>">» Link Text Goes Here</a>
                </div>
            </div>
            <div >
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-2.png" class="card-img-bottom" alt="main-image">
            <div class="slider-nav-link-item">
                <a href="<?php echo get_the_permalink();?>">» Link Text Goes Here</a>
            </div>
            </div>
            <div> 
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-3.png" class="card-img-bottom" alt="main-image">
            <div class="slider-nav-link-item">
                <a href="<?php echo get_the_permalink();?>">» Link Text Goes Here</a>
            </div>
            </div>
            <div>
            <img src="<?php bloginfo('template_directory')?>/assets/img/main-img-4.png" class="card-img-bottom" alt="main-image">
            <div class="slider-nav-link-item">
                <a href="<?php echo get_the_permalink();?>">» Link Text Goes Here</a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!--section with cards-->
    <section class="info-section">
        <div class="row cards-section">
            <?php   
            
            $query = new WP_Query( array(
                'post_type' => 'cards',
                'posts_per_page' => 4
            ) );

            foreach($query->posts as $card){ 
                ?>
                <article class="card">
                    <h2 class="card-title">
                        <?php echo get_the_title($card->ID); ?>
                    </h2>
                    <div class="card-content">
                        <?php echo $card->post_content; ?>
                    </div>
                    <a href="<?php echo get_the_permalink(); ?>" class="card-link"> Continue Reading » </a>
                </article>
                <?php
            }
            ?>

        </div>

        <!--aside section with two sidebars-->
        <aside class="sidebars">
            <div id="sidebar" class="sidebar">
            <?php if ( is_active_sidebar('posts-sidebar') ) { ?>
                <ul id="sidebar">
                    <?php dynamic_sidebar('posts-sidebar'); ?>
                </ul>
            <?php } ?>

            </div>
        </aside>
    </section>

</main><!-- #site-content -->

<?php get_footer(); ?>

