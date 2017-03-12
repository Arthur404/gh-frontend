<?php
function homework_customize_register($wp_customize) {

    $wp_customize->add_section(
        'hero',
        array(
            'title' => esc_html__('Hero'),
            'priority' => 10,
        )
    );
    $wp_customize->add_setting(
        'bg-hero'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-hero',
            array(
                'label' => esc_html__('Background image hero'),
                'section' => 'hero'
            )
        )
    );

    $wp_customize->add_section(
        'footer',
        array(
            'title' => esc_html__('Footer'),
            'priority' => 30,
        )
    );
    $wp_customize->add_setting(
        'add_phone_number',
        array(
            "default"=>esc_html__('tel')
        )
    );
    $wp_customize->add_control(
        'add_phone_number',
        array(
            'label' => esc_html__('tel'),
            'section' => 'footer',
            'type' => 'text',
        )
    );

    $social = array("facebook", "google", "twitter", "linkedin");
    for ($i=0; $i<count($social); $i++) {
        $wp_customize->add_setting(
            'url_'.$social[$i],
            array(
                "default"=>false
            )
        );
        $wp_customize->add_control(
            'url_'.$social[$i],
            array(
                'label' => esc_html__('URL '.$social[$i]),
                'section' => 'footer',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'hide_'.$social[$i],
            array(
                'default' => false
            )
        );
        $wp_customize->add_control(
            'hide_'.$social[$i],
            array(
                'label' => esc_html__('Hide '.$social[$i]),
                'section' => 'footer',
                'type' => 'checkbox'
            )
        );
    }

    $wp_customize->add_setting(
        'copy',
        array(
            "default"=>esc_html__('Copy')
        )
    );
    $wp_customize->add_control(
        'copy',
        array(
            'label' => esc_html__('Copyright text'),
            'section' => 'footer',
            'type' => 'textarea'
        )
    );

    $num_section = array("one", "two", "three", "four", "five",);
    for ($i=0; $i<count($num_section); $i++) {
        $wp_customize->add_section(
            'section_'.$num_section[$i],
            array(
                'title' => esc_html__('Section ').$num_section[$i],
                'priority' => 20,
            )
        );
        $wp_customize->add_setting(
            'title_settings_'.$num_section[$i],
            array(
                "default"=>esc_html__('title')
            )
        );
        $wp_customize->add_control(
            'title_settings_'.$num_section[$i],
            array(
                'label' => esc_html__('Title'),
                'section' => 'section_'.$num_section[$i],
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'description_settings_'.$num_section[$i],
            array(
                "default"=>esc_html__('description')
            )
        );
        $wp_customize->add_control(
            'description_settings_'.$num_section[$i],
            array(
                'label' => esc_html__('Description'),
                'section' => 'section_'.$num_section[$i],
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'content_settings_'.$num_section[$i],
            array(
                "default"=>esc_html__('content')
            )
        );
        $wp_customize->add_control(
            'content_settings_'.$num_section[$i],
            array(
                'label' => esc_html__('Content'),
                'section' => 'section_'.$num_section[$i],
                'type' => 'textarea',
            )
        );
        $wp_customize->add_setting(
            'background_color_settings_'.$num_section[$i],
            array(
                'default' => '#eaeff3'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'background_color_settings_'.$num_section[$i],
                array(
                    'label' => esc_html__('Background color'),
                    'section' => 'section_'.$num_section[$i]
                )
            )
        );
        $wp_customize->add_setting(
            'hide_section_'.$num_section[$i],
            array(
                'default' => false
            )
        );
        $wp_customize->add_control(
            'hide_section_'.$num_section[$i],
            array(
                'label' => esc_html__('Hide section'),
                'section' => 'section_'.$num_section[$i],
                'type' => 'checkbox'
            )
        );
        $wp_customize->add_setting(
            'btn_url_'.$num_section[$i],
            array(
                'default' => false
            )
        );
        $wp_customize->add_control(
            'btn_url_'.$num_section[$i],
            array(
                'label' => esc_html__('Button URL'),
                'section' => 'section_'.$num_section[$i]
            )
        );
        $wp_customize->add_setting(
            'btn_text_'.$num_section[$i],
            array(
                'default' => false
            )
        );
        $wp_customize->add_control(
            'btn_text_'.$num_section[$i],
            array(
                'label' => esc_html__('Button text'),
                'section' => 'section_'.$num_section[$i]
            )
        );
    }
}

function bg_hero() {
    ?>
    <style type="text/css">
        body .hero {
            background: url(<?php echo get_theme_mod('bg-hero') ?>) 50% 0 /cover no-repeat, #000;
        }
    </style>
    <?php
}

add_action('wp_head', 'bg_hero');

function social_setting() {
    ?>
    <style type="text/css">
        .fb {
            display: <?php
                    if(get_theme_mod('hide_facebook') == true)
                        echo "none";
                    ?>;
        }
        .google {
            display: <?php
                    if(get_theme_mod('hide_google') == true)
                        echo "none";
                    ?>;
        }
        .tw {
            display: <?php
                    if(get_theme_mod('hide_twitter') == true)
                        echo "none";
                    ?>;
        }
        .in {
            display: <?php
                    if(get_theme_mod('hide_linkedin') == true)
                        echo "none";
                    ?>;
        }
    </style>
    <?php
}

add_action('wp_head', 'social_setting');

function bg_section() {
    ?>
    <style type="text/css">
        .about {
            display: <?php
                    if(get_theme_mod('hide_section_one') == true)
                        echo "none";
                    ?>;
            background-color: <?php echo get_theme_mod('background_color_settings_one'); ?>;
        }
        .services {
            display: <?php
                    if(get_theme_mod('hide_section_two') == true)
                        echo "none";
                    ?>;
            background-color: <?php echo get_theme_mod('background_color_settings_two'); ?>;
        }
        .clients {
            display: <?php
                    if(get_theme_mod('hide_section_three') == true)
                        echo "none";
                    ?>;
            background-color: <?php echo get_theme_mod('background_color_settings_three'); ?>;
        }
        .news {
            display: <?php
                    if(get_theme_mod('hide_section_four') == true)
                        echo "none";
                    ?>;
            background-color: <?php echo get_theme_mod('background_color_settings_four'); ?>;
        }
        .partners {
            display: <?php
                    if(get_theme_mod('hide_section_five') == true)
                        echo "none";
                    ?>;
            background-color: <?php echo get_theme_mod('background_color_settings_five'); ?>;
        }
    </style>
    <?php
}

add_action('wp_head', 'bg_section');

add_action('customize_register', 'homework_customize_register');
