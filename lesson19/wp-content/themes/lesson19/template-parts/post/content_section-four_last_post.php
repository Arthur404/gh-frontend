<div class="col-xs-2 info">
    <time datetime="2015-10-30"><?= get_the_date('j'); ?><span><?= get_the_date('M-Y'); ?></span>
    </time>
    <div class="com">
        <i class="progress control"></i>
        <i class="fa fa-comments-o comment"></i>
        <p><span class="count-com"><?php comments_number('0', '1', '%');?></span> - Com</p>
    </div>
    <div class="view">
        <i class="progress control-view"></i>
        <i class="icon-view views"></i>
        <p><span class="count-view"><?= get_post_meta($post->ID, 'visited_count', true) ?></span> - View</p>
    </div>
</div>
<div class="col-xs-10 posters">
    <?= the_post_thumbnail(); ?>
    <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
    <?php the_content() ?>
</div>