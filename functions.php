<?php 

register_nav_menus(
    array('primary_menu' => 'Top Menu')
);

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custome-logo');
add_theme_support('widgets');
add_theme_support('custom-background');

add_post_type_support('page', 'excerpt');

register_sidebar(
    array('name'=>'Main Right SideBar', 'id'=> 'mrsidebar')
);


?>