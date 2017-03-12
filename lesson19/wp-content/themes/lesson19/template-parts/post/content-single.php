<article id="post-<?php the_ID(); ?>" <?php post_class('article row'); ?>>
    <div class="avatar-blog col-xs-2 col-md-1">
        <?php echo get_avatar( $email, 70, '', $name ); ?>
    </div>
    <div class="col-sm-10 col-md-11 blog-heading">
        <h3><?php the_title() ?></h3>
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
                <i class="fa fa-facebook"></i>
            </li>
            <li class="tw">
                <i class="fa fa-twitter"></i>
            </li>
            <li class="google">
                <i class="fa fa-google-plus"></i>
            </li>
        </ul>
    </div>
    <div class="row admin">
        <div class="col-sm-2">
            <img src="img/admin.jpg" alt="">
        </div>
        <div class="col-sm-10 admin-name">
            <h4>Admin Name</h4>
            <p>Established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.</p>
        </div>
    </div>
</article>