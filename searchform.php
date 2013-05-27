<?php
/**
 * The template for displaying search forms in Themeideas
 *
 * @package Themeideas
 * @author Neoideas <contacto@neoideas.mx>
 */
?>
	<form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'themeideas' ); ?></label>
		<div class="input-append">
			<input type="search" class="search-query" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo _e( 'Search...', 'themeideas' ); ?>" />
			<input type="submit" class="btn" id="searchsubmit" value="<?php echo _e( 'Search', 'themeideas' ); ?>" />
		</div>
	</form>
