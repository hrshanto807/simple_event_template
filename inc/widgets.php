<?php 
function simple_event_sidbar(){
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'themetheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'themetheme'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));



};
add_action('widgets_init','simple_event_sidbar')





?>