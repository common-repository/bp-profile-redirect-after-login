<?php
/**
* Plugin Name: Redirect to buddyPress profile after login
* Description: It adds a way for users to be redirect to BP wall after login
* Version: 1.0
* Author: Mubashir taqi
* Author URI: https://membershipwith.me/
* License: GNU General Public License v3.0
* Requires PHP: 5.3
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Check to see if MemberPress is active

function redirect_bp_profile() {
	global $user;
	return bp_core_get_user_domain( $user->ID );
}
add_filter('login_redirect', 'redirect_bp_profile');