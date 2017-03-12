<?php get_header() ?>
    <div class="pages">
    </div>
    </section>
    <section class="blog blog-post">
        <div class="container section pyramid">
            <div class="title">
                <h2><?php the_title() ?></h2>
                <?= category_description($id); ?>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template-parts/post/content', 'single') ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer() ?>