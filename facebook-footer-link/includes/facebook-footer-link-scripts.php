<?php
// Add scripts

function ffl_add_scripts() {

  /*wp_enqueue_style( 'ffl-main-style', plugins_url() . 'css/style.css' );

  wp_enqueue_script( 'ffl-main-script', plugins_url() . 'js/main.js' ); */

  wp_enqueue_style( 'ffl-main-style', plugin_dir_url( dirname( __FILE__ ) ) . 'css/style.css', array(), null, 'screen' );

  wp_enqueue_script( 'ffl-main-script', plugin_dir_url( dirname( __FILE__ ) ) . 'js/main.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'ffl_add_scripts' );


?>
