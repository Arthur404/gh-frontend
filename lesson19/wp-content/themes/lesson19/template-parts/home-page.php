
<?php
/*
Template Name: template home-page
*/
?>
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

<?php get_template_part('layouts/about') ?>

<?php get_template_part('layouts/services') ?>

<?php get_template_part('layouts/clients') ?>

<?php get_template_part('layouts/news') ?>

<?php get_template_part('layouts/partners') ?>

<?php get_footer() ?>