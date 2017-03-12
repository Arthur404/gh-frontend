<?php
function true_post_type() {
    $num_section = array("two", "three", "four", "five",);
    for ($i=0; $i<count($num_section); $i++) {
        register_post_type('section_'.$num_section[$i],
            array(
                'labels' => array(
                    'name' => __('Section '.$num_section[$i]),
                    'singular_name' => __('Post'),
                    'add_new' => __('New post')
                ),
                'public' => true,
                'has_archive' => true,
                'show_ui' => true,
                'taxonomies' => array('category', 'post_tag'),
                'capability_type' => 'post',
                'supports' => array('title', 'editor', 'excerpt', 'comments', 'author', 'thumbnail', 'custom-fields')
            )
        );
    }
}

add_action('init', 'true_post_type');