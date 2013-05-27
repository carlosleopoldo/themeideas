<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Themeideas
 * @author Neoideas <contacto@neoideas.mx>
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function themeideas_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'themeideas_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 */
function themeideas_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'themeideas_body_classes' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
function themeideas_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}
add_filter( 'attachment_link', 'themeideas_enhanced_image_navigation', 10, 2 );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 */
function themeideas_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'themeideas' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'themeideas_wp_title', 10, 2 );

/**
 * Applies customizations to the post comment form.
 */
function themeideas_comment_form( $default_labels ) {
	global $user_identity;

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
		'author' => '<div class="control-group">' . '<label for="author">' . __( 'Name', 'themeideas' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' .
		            '<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>' .
		            '<input class="input-xlarge placeholder" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Name', 'themeideas' ) . '" /></div></div>',
		'email'  => '<div class="control-group"><label for="email">' . __( 'Email', 'themeideas' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' .
		            '<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>' .
		            '<input class="input-xlarge" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Email', 'themeideas' ) . '" /></div></div>',
		'url'    => '<div class="control-group"><label for="url">' . __( 'Website', 'themeideas' ) . '</label>' .
		            '<div class="input-prepend"><span class="add-on"><i class="icon-home"></i></span>' .
		            '<input class="input-xlarge" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . __( 'Website', 'themeideas' ) . '" /></div></div>',
	);

	$new_labels = array(
		'fields'         => $fields,
		'comment_field'  => '<div class="control-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea class="input-xxlarge" id="comment" name="comment" placeholder="' . __( 'Your comment…', 'themeideas' ) . '" cols="45" rows="8" aria-required="true"></textarea></div>',
		'logged_in_as'   => '',
		'must_log_in'    => '<p class="alert">' . sprintf( __( 'You must be <a href="%1$s">logged in</a> to post a comment.', 'themeideas' ), wp_login_url( get_permalink() ) )	. '</p>',
		'comment_notes_after' => '',
		'title_reply'    => __( 'Leave a reply', 'themeideas' )
	);

	return array_merge( $default_labels, $new_labels );
}
add_filter( 'comment_form_defaults', 'themeideas_comment_form', 10 );
