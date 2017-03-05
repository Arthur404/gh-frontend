<section class="partners">
    <div class="container section pyramid">
        <div class="title">
            <h2><?php $id = get_cat_ID('partners'); echo get_cat_name($id); ?></h2>
            <?= category_description($id); ?>
        </div>
        <ul class="row slider-main slider-partners">
            <?php query_posts('category_name=partners'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="col-xs-2 logo-partners">
                    <?= the_post_thumbnail(); ?>
                </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>