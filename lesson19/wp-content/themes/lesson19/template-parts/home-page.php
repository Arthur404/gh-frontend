
<?php
/*
Template Name: template home-page
*/
?>
<?php get_header() ?>
<?php get_template_part('template-parts/hero') ?>

<section class="about" id="about">
    <div class="container section">
        <div class="row">
            <div class="col-xs-12 col-sm-5 title">
                <h2><?php echo get_theme_mod('title_settings_one'); ?></h2>
                <p><?php echo get_theme_mod('description_settings_one'); ?></p>
            </div>
            <div class="col-xs-12 col-sm-7 about-content">
                <p><?php echo get_theme_mod('content_settings_one'); ?></p>
                <a class="btn" href="<?php echo get_theme_mod('btn_url_one'); ?>"><?php echo get_theme_mod('btn_text_one'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container section pyramid">
        <div class="title">
            <h2><?php echo get_theme_mod('title_settings_two'); ?></h2>
            <p><?php echo get_theme_mod('description_settings_two'); ?></p>
        </div>
        <ul class="services-category row">

            <?php
            $args = array(
                    'post_type' => 'section_two'
            );
            $the_query = new WP_Query($args);
            if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <?php get_template_part('template-parts/post/content_section', 'two') ?>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>
        <a class="btn" href="<?php echo get_theme_mod('btn_url_two'); ?>"><?php echo get_theme_mod('btn_text_two'); ?></a>
    </div>
</section>

<section class="clients">
    <div class="container section">
        <div class="title">
            <h2><?php echo get_theme_mod('title_settings_three'); ?></h2>
            <p><?php echo get_theme_mod('description_settings_three'); ?></p>
        </div>
        <ul class="row slider-main slider-clients">

            <?php
            $args = array(
                'post_type' => 'section_three'
            );
            $the_query = new WP_Query($args);
            if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <?php get_template_part('template-parts/post/content_section', 'three') ?>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>
    </div>
</section>

<section class="news">
    <div class="container section">
        <div class="title">
            <h2><?php echo get_theme_mod('title_settings_four'); ?></h2>
            <p><?php echo get_theme_mod('description_settings_four'); ?></p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 news-view">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'section_four'
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query -> have_posts() ) : $the_query -> the_post();
                        update_post_meta(get_the_ID(), 'visited_count', get_post_meta(get_the_ID(), 'visited_count', true)+1);
                    ?>
                        <?php get_template_part('template-parts/post/content_section', 'four_last_post') ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 news-feed">
                <ul>

                    <?php
                    $args = array(
                        'post_type' => 'section_four',
                        'posts_per_page' => 2
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                        <?php get_template_part('template-parts/post/content_section', 'four') ?>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                </ul>
                <a class="btn" href="<?php echo get_theme_mod('btn_url_four'); ?>"><?php echo get_theme_mod('btn_text_four'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container section pyramid">
        <div class="title">
            <h2><?php echo get_theme_mod('title_settings_five'); ?></h2>
            <p><?php echo get_theme_mod('description_settings_five'); ?></p>
        </div>
        <ul class="row slider-main slider-partners">
            <?php
            $args = array(
                'post_type' => 'section_five'
            );
            $the_query = new WP_Query($args);
            if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <?php get_template_part('template-parts/post/content_section', 'five') ?>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>

<?php get_footer() ?>