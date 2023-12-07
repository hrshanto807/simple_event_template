<?php
// wp_enqueue_scripts
function simple_event_all_script()
{
    wp_enqueue_style('simple_event_stylesheet', get_theme_file_uri('inc/custom.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('inc/fontawesome/css/all.min.css'));
    wp_enqueue_script('jQuery');
};
add_action('wp_enqueue_scripts', 'simple_event_all_script');
function simple_event_font_awesome()
{   wp_enqueue_style('fontawesome', get_theme_file_uri('inc/fontawesome/css/all.min.css'));};

add_action('admin_enqueue_scripts', 'simple_event_font_awesome');



//  load title nav-menu custom-header post background
function simple_event_template()
{
    load_theme_textdomain('simpleevent', get_template_directory() . '/inc/lang');
    add_theme_support('title-tag');
    register_nav_menu('simpleeventmenu', __('Header Menu', 'simpleeventtemplate'));
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_image_size('simple_event_post_thumbnails_size', 136, 115, true);
};

add_action('after_setup_theme', 'simple_event_template');

// faalback menu

function customsimpleeventmenu()
{ ?>
    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
<?php };


// customize header area 

function simple_customize_register($wp_customize)
{
    // custom logo customize
    $wp_customize->add_section('simple_header_option', array(
        'title' => __('Header Logo Customize', 'simpleeventtemplate'),
        'description' => 'If you changed logo,You can do it.',
    ));

    $wp_customize->add_setting('header_area_simpleevent', array(
        'default' => get_theme_file_uri('inc/tmp/Screenshot_2.jpg')

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_area_simpleevent', array(
        'label' => 'Logo Upload',
        'setting' => 'header_area_simpleevent',
        'section' => 'simple_header_option'
    )));

    // menu position customize

    $wp_customize->add_section('simple_menus_option', array(
        'title' => __('Menu Customize', 'simpleeventtemplate'),
        'description' => 'Do Menus position change from here',
    ));

    $wp_customize->add_setting('simple_menu_position', array(
        'default' => 'left_menu'

    ));

    $wp_customize->add_control('simple_menu_position', array(
        'label' => 'Menu Position',
        'section' => 'simple_menus_option',
        'setting' => 'simple_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',

        )
    ));
};
add_action('customize_register', 'simple_customize_register');

include_once('inc/widgets.php');
// Meta Box
// function simple_event_metabox()
// {
//     add_meta_box(
//         "simple_post_subtitle",
//         __("Our Subtitle", 'simpleeventtemplate'),
//         "our_metabox_subtitle_fun",
//         "post",
//         'advanced',
//         'high'
//     );
// };
// add_action('add_meta_boxes', 'simple_event_metabox');

// function our_metabox_subtitle_fun($post)
// {
    // $value = get_post_meta(get_the_ID(), 'our_subtitle', true);
// ?>
     <!-- <label for="our_subtitle">Subtitle:</label>
     <input type="text" name="our_subtitle" id="our_subtitle" placeholder="Input Your Subtitle" value="<?php //echo $value ?>"> -->
 <?php
//};


// function simple_event_meta_post_save($post_id)
// {
//     update_post_meta($post_id,'our_subtitle', $_POST['our_subtitle']);
// };
// add_action('save_post', 'simple_event_meta_post_save');


// CMB2
//require_once __DIR__ . '/inc/cmb2/init.php';
// require_once __DIR__ . '/inc/cmb2/example-functions.php';
 //require_once __DIR__ . '/inc/cmb2/fields.php';
 require_once __DIR__ . '/redux/redux-framework.php';
 //require_once __DIR__ . '/redux/sample/sample-config.php';
 require_once __DIR__ . '/redux/sample/amar-field.php';
