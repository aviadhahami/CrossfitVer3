<? /*Create Nav Menu */ 
if (function_exists( 'register_nav_menus')) {
    register_nav_menus(array( 'primary'=>'Header Navigation')); 
}
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails'); 
}
if (function_exists('add_image_size')) { 
    add_image_size('featured', 400, 250, true);
    add_image_size('post-thumb', 200, 125, true);
}
function add_myjavascript(){
  wp_enqueue_script( 'ajax-implementation.js', get_bloginfo('template_directory') . "/scripts/ajax-implementation.js", array( 'jquery' ) );
  }
  add_action( 'init', 'add_myjavascript' );

function MyAjaxFunction(){
    //get the data from ajax() call
    $GreetingAll = $_POST['GreetingAll'];
    $results = "<h2>".$GreetingAll."</h2>"; // Return the String
    die($results);
}

// creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_MyAjaxFunction', 'MyAjaxFunction' );
add_action( 'wp_ajax_MyAjaxFunction', 'MyAjaxFunction' );


?>
