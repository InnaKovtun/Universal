<div class="sidebars">
    <aside id="sidebar"  class="sidebar">
        <?php dynamic_sidebar('posts-sidebar');?>
    </aside>

    <aside class="row gallery sidebar">
        <h2 class="sidebar-title">Ametorci Phasellus</h2>
        
        <?php 
        if( $images ): ?>

                <?php foreach( $images as $image_id ): ?>
                    
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="gal-ph" >
                    
                <?php endforeach; ?>

        <?php endif; ?>
    
    </aside>
</div>
