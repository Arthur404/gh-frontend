
<?php
/*
Template Name: template blog-page
*/
?>

<?php get_header() ?>
<div class="pages">
</div>
</section>
<section class="blog">
    <div class="container section pyramid">
        <div class="title">
            <h2><?php $id = get_cat_ID('blog-page'); echo get_cat_name(12); ?></h2>
            <?= category_description(9); ?>
        </div>

        <?php query_posts('category_name=blog-page'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article row">
                <div class="avatar-blog col-xs-2 col-md-1">
                    <?php echo get_avatar( $email, 70, '', $name ); ?>
                </div>
                <div class="col-sm-10 col-md-11 blog-heading">
                    <h3><?php the_title() ?></h3>
                    <div class="date">
                        <span>Posted by:
                            <span class="author"><?php the_author(); ?></span>,
                            <time>
                            <?php the_date('F-j-Y'); ?>
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
                    <a href="blog_post.php" class="btn">Read More</a>
                </div>
            </article>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="nav-blog flex-content">
            <a class="btn-next active-btn" href="blog.php">1</a>
            <a class="btn-next" href="blog.php">2</a>
            <a class="btn-next" href="blog.php">3</a>
        </div>
    </div>
</section>
<?php get_footer() ?>