<?php
if ( function_exists('register_sidebar') ) 
{
register_sidebar(array('name'=>'Footerbar',
		'before_widget' => '<li>', 
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',     
		));
}
// For backward Compatiblity to older versions of WordPress
add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/old-comments.php';
	return $file;
}
?>