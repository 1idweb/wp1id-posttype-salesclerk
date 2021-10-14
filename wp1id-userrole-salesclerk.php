<?php
/**
 * Plugin Name:   User Role Sales Clerk
 * Plugin URI:    https://github.com/1idweb/wp1id-userrole-salesclerk
 * Author:        1idweb
 * Author URI:    https://1idweb.com
 * Text Domain:   userrole-salesclerk
 * Domain Path:   /languages
 */

function rename_existing_role() {
    global $wp_roles;

    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $wp_roles->roles['contributor']['name'] = __('Sales Clerk', 'userrole-salesclerk');
    $wp_roles->role_names['contributor'] = __('Sales Clerk', 'userrole-salesclerk');
}
add_action('init', 'rename_existing_role');
