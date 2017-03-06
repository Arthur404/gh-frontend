<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="hero">
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="flex-nav">
                    <h1 class="logo">
                        <?php the_custom_logo(); ?>
                    </h1>
                    <div class="tel"><a href="tel:+99788856999">+9978 8856 999</a></div>
                    <button class="navbar-toggle collapsed nav-btn" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse nav-menu" id="navbar-collapse">
                    <?php wp_nav_menu(array('them_location' => 'menu', 'container' => false, 'menu_class' => 'nav navbar-nav')) ?>
                </div>
            </div>
        </nav>
    </header>