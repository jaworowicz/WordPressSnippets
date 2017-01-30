add_action( 'wp_head', 'jcz_disqus_controll' );
function jcz_disqus_controll() {
 	if ( is_singular( array( 'post', 'page' ) ) && comments_open() )
		return;
	remove_action( 'loop_end', 'dsq_loop_end' );
	remove_action( 'wp_footer', 'dsq_output_footer_comment_js' );
 
}
