<?php
$user_id = get_current_user_id();
if ($user_id == 7) { 

 function remove_menus(){

 remove_menu_page( 'index.php' ); 
 remove_menu_page( 'edit.php' ); 
 remove_menu_page( 'upload.php' ); 
 remove_menu_page( 'edit.php?post_type=page' ); 
 remove_menu_page( 'edit-comments.php' ); 
 remove_menu_page( 'themes.php' ); 
 remove_menu_page( 'plugins.php' ); 
 remove_menu_page( 'users.php' ); 
 remove_menu_page( 'tools.php' ); 
 remove_menu_page( 'options-general.php' ); 
 remove_menu_page( 'admin.php?page=revslider' ); 
 remove_menu_page( 'admin.php?page=wpseo_dashboard' ); 
 remove_menu_page( 'admin.php?page=pixel-your-site' ); 
 remove_menu_page( 'admin.php?page=wpcf7' );
 }
 add_action( 'admin_menu', 'remove_menus' );
} else {}
?>