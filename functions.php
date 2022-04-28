<?php
// New file require to load so register here by require
require_once get_template_directory().'/inc/customizer.php';

//Including stylesheet and script files 
function load_scripts(){
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array('jquery'),'5.1.3','true');
    wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('tks',get_template_directory_uri().'/css/templatex.css', array(), '1.0', 'all');
    wp_enqueue_style('ckss',get_template_directory_uri().'/css/templatec.css',array(),'1.0','all');
}
add_action('wp_enqueue_scripts','load_scripts');

//Main configuration function
function wpbks_config(){
    //Registering our menus
register_nav_menus(
    array(
        'my_main_menu'=>'main Menu',
        'my_footer_menu'=>'footer Menu'

    )

    );
    $args= array(
        'height'=>225,
        'width'=>1920
    );
    add_theme_support('custom-header',$args);
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array(
    'aside',
    'audio',
    'chat',
    'gallery',
    'image',
    'link',
    'quote',
    'status',
    'video',
    ) );
    //adding title tag 
    add_theme_support('title-tag');
    // adding logo this will create select logo in site identity in customize
    // add_theme_support('custom-logo',array(
    //     'height'=>1100,
    //     'width'=>2007
    // ));

    //theme internationalization 

    $textdomain='wpbks';
    load_theme_textdomain($textdomain,get_template_directory().'/languages/');

    //Support for Gutenberg features
      add_theme_support('align-wide');
      add_theme_support('align-full');
      add_theme_support('resposive-embeds');
      add_theme_support('editor-color-palette',array(
          array(
              'name'=>__('Blood Red','wpbks'),
              'slug'=>'blood-red',
              'color'=>'#b9121b',
          ),
           array(
              'name'=>__('white','wpbks'),
              'slug'=>'white',
              'color'=>'#ffffff',
          )
          ));
}
add_action('after_setup_theme','wpbks_config',0);
// sidebar registering

add_action('widgets_init','wpbks_sidebars');
function wpbks_sidebars(){
    register_sidebar(
        array(
            'name'=>"Hone page sidebar",
            'id'=>'sidebar-1',
            'description'=>'This is the hone page sidebar. You can add widgets here',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2">',

        )
        );
         register_sidebar(
        array(
            'name'=>"blog page sidebar",
            'id'=>'sidebar-2',
            'description'=>'This is the hone page sidebar. You can add widgets here',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2">',

        )
        );
          register_sidebar(
        array(
            'name'=>"Service 1",
            'id'=>'services-1',
            'description'=>'First service area',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2">',

        )
        );
          register_sidebar(
        array(
            'name'=>"Service 2",
            'id'=>'services-2',
            'description'=>'Second service area',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2">',

        )
        );
          register_sidebar(
        array(
            'name'=>"Service 3",
            'id'=>'services-3',
            'description'=>'Third service area',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2">',

        )
        );
}



