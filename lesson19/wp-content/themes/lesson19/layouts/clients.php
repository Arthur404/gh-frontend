<section class="clients">
    <div class="container section">
        <div class="title">
            <h2><?php $id = get_cat_ID('clients'); echo get_cat_name($id); ?></h2>
            <?= category_description($id); ?>
        </div>
        <ul class="row slider-main slider-clients">

            <?php query_posts('category_name=clients'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="col-xs-12 col-sm-6">
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
            <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </div>
</section>