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
    
    <?php the_content();?>
</section>