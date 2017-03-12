
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
            <h2><?php $id = get_cat_ID('blog page'); echo get_cat_name($id); ?></h2>
            <?= category_description($id); ?>
        </div>

        <?php query_posts('category_name=blog-page'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('template-parts/post/content', get_post_format()); ?>

        <?php endwhile; ?>
        <?php endif; ?>

        <div class="nav-blog flex-content">
            <a class="btn-next active-btn" href="">1</a>
            <a class="btn-next" href="">2</a>
            <a class="btn-next" href="">3</a>
        </div>
    </div>
</section>
<?php get_footer() ?>