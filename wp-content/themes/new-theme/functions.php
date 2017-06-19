<?php

/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
//load script css
function load_file(){
  /*
  untuk nge-load fungsi cssnya :
  parameter 1 : nama style nya
  parameter 2 : link stylenya
  */
  wp_enqueue_style('style', get_stylesheet_uri());
}

//memanggil fungsi css nya
add_action('wp_enqueue_scripts', 'load_file');
//end load  scipts css

/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
//menampilkan menu

register_nav_menus(array(
  'main_menu' => 'Menu Utama',
  'footer_menu' => 'Menu Footer'
));

//end menampilkan menu
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
//get excerpt

function get_excerpt_length(){
  return 15;
}

function return_excerpt_text(){
  return '...';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');


//end get excerpt
