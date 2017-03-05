<section class="about" id="about">
    <div class="container section">
        <div class="row">
            <div class="col-xs-12 col-sm-5 title">
                <h2><?php $id = get_cat_ID('about'); echo get_cat_name(9); ?></h2>
                <?= category_description(9); ?>
            </div>
            <?php query_posts('category_name=about'); if ( have_posts() ) : the_post(); ?>
                <div class="col-xs-12 col-sm-7 about-content">
                    <?php the_content('<button class="btn">Read More</button>') ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>