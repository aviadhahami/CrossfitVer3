<?

//create nav menu
if (function_exists('register_nav_menus')) {
    register_nav_menus(array('primary' => 'Header Navigation'));
}
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
if (function_exists('add_image_size')) {
    add_image_size('featured', 400, 250, true);
    add_image_size('post-thumb', 200, 125, true);
}
?>
