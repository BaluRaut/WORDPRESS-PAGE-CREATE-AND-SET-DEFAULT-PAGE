           global $user_ID;
$page['post_type']    = 'page';
$page['post_content'] = '';
$page['post_parent']  = 0;
$page['post_author']  = $user_ID;
$page['post_status']  = 'publish';
$page['post_title']   = 'Snacks';
$pageid = wp_insert_post ($page);

$page['post_type']    = 'page';
$page['post_content'] = '';
$page['post_parent']  = 0;
$page['post_author']  = $user_ID;
$page['post_status']  = 'publish';
$page['post_title']   = 'Breakfast';
$pageid = wp_insert_post ($page);

$page['post_type']    = 'page';
$page['post_content'] = '';
$page['post_parent']  = 0;
$page['post_author']  = $user_ID;
$page['post_status']  = 'publish';
$page['post_title']   = 'Lunch';
$pageid = wp_insert_post ($page);

$page['post_type']    = 'page';
$page['post_content'] = '';
$page['post_parent']  = 0;
$page['post_author']  = $user_ID;
$page['post_status']  = 'publish';
$page['post_title']   = 'Dinner';
$pageid = wp_insert_post ($page);

$about = get_page_by_title( 'Breakfast' );
update_option( 'page_on_front', $about->ID );
update_option( 'show_on_front', 'page' );
