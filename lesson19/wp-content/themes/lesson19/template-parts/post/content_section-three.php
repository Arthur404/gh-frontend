<li id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-6'); ?>>
    <?php the_content() ?>
    <div class="row flex-content">
        <div class="col-xs-3 client-avatar">
            <?= the_post_thumbnail(); ?>
        </div>
        <div class="col-xp-9 client-name">
            <h3><?php the_title() ?></h3>
            <span><?= get_post_meta($post->ID, 'position', true) ?></span>
        </div>
    </div>
</li>