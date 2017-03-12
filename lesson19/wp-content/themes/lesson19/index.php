<?php get_header() ?>
    <div class="container">
        <div class="slider-hero">
            <div class="slide">
                <div class="intro-hero">
                    <h2 class="welcome"><span>Welcome to</span><?= get_bloginfo('name'); ?></h2>
                    <span class="intro"><?= get_bloginfo('description'); ?></span>
                    <button class="btn active-btn">Read More</button>
                </div>
            </div>
            <div class="slide">
                <div class="intro-hero">
                    <h2 class="welcome"><span>Welcome to</span><?= get_bloginfo('name'); ?></h2>
                    <span class="intro"><?= get_bloginfo('description'); ?></span>
                    <button class="btn active-btn">Read More</button>
                </div>
            </div>
            <div class="slide">
                <div class="intro-hero">
                    <h2 class="welcome"><span>Welcome to</span><?= get_bloginfo('name'); ?></h2>
                    <span class="intro"><?= get_bloginfo('description'); ?></span>
                    <button class="btn active-btn">Read More</button>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="blog blog-post">
        <div class="container section pyramid">
            <div class="title">
                <h2><?php the_title() ?></h2>
                <?= category_description($id); ?>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template-parts/post/content', get_post_format()); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer() ?>