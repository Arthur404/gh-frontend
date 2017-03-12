<article id="post-<?php the_ID(); ?>" <?php post_class('article row'); ?>>
    <div class="avatar-blog col-xs-2 col-md-1">
        <?php echo get_avatar( $email, 70, '', $name ); ?>
    </div>
    <div class="col-sm-10 col-md-11 blog-heading">
        <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
        <div class="date">
                        <span>Posted by:
                            <span class="author"><?php the_author(); ?></span>,
                            <time>
                            <?= get_the_date('F-j-Y'); ?>
                            </time>
                        </span>
        </div>
        <div class="cover">
            <?= the_post_thumbnail(); ?>
        </div>
        <?php the_content() ?>
        <span>Share: </span>
        <ul class="share">
            <li class="fb">
                <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="google">
                <a href="<?php echo get_theme_mod('url_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            </li>
            <li class="tw">
                <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
        </ul>
        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
    </div>
</article>