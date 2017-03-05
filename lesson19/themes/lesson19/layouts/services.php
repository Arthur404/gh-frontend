<section class="services">
    <div class="container section pyramid">
        <div class="title">
            <h2><?php $id = get_cat_ID('services'); echo get_cat_name($id); ?></h2>
            <?= category_description($id); ?>
        </div>
        <ul class="services-category row">

            <?php query_posts('category_name=services'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-2 services-icon">
                            <?= the_post_thumbnail(); ?>
                        </div>
                        <div class="col-xs-10 services-content">
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php endif; ?>

        </ul>
        <button class="btn">View more</button>
    </div>
</section>