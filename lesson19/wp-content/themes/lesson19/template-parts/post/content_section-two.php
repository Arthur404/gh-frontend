<li class="col-xs-12 col-sm-6">
    <div class="row">
        <div class="col-xs-2 services-icon">
            <?= the_post_thumbnail(); ?>
        </div>
        <div class="col-xs-10 services-content">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <?php the_content(); ?>
        </div>
    </div>
</li>