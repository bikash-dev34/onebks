<!-- This file customizer is not load automatically so register in functions  as require
. This will store in database and gives customization of footer or any  -->
<?php 
function wpbks_customzr1($wp_customize){
    //copyright
    $wp_customize-> add_section('sec_copyright',array(
        'title'=>'Copyright',
        'description'=>'Plz, type here your copyright'
    ));
    $wp_customize->add_setting('set_copyright',array(
        'type'=>'theme_mod',
        'default'=>'Copyright X all rights reserved',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('ctrl_copyright',array(
        'label'=>'Copyright information',
        'description'=>'Copyright X  reserved',
        'section'=>'sec_copyright',
        'settings'=>'set_copyright',
        'type'=>'text'
    ));
    // api key

    $wp_customize->add_section('sec_map',array(
        'title'=>'Map',
        'description'=>'The Map Section'
    ));
    $wp_customize->add_setting('set_map_apikey',array(
        'type'=>'theme_mod',
        'default'=>'',
        'sanitize_callback'=>'esc_attr'
    ));
      $wp_customize->add_control('ctrl_map_apikey',array(
        'label'=>'Coogle maps api key',
        'description'=>'Get your key in google',
        'section'=>'sec_map',
        'settings'=>'set_map_apikey',
        'type'=>'text'
    ));
// map address

  
    $wp_customize->add_setting('set_map_address',array(
        'type'=>'theme_mod',
        'default'=>'',
        'sanitize_callback'=>'esc_attr_textarea'
    ));
      $wp_customize->add_control('ctrl_map_address',array(
        'label'=>'Type your address here',
        'description'=>'No special characters',
        'section'=>'sec_map',
        'settings'=>'set_map_address',
        'type'=>'textarea'
    ));

}
// now hook the above function
add_action('customize_register','wpbks_customzr1');