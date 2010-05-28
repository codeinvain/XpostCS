<?php
/*
 * Low level configuration of the plugin.
 */

/*  Copyright 2009 Jan Gosmann  (email: jan@hyper-world.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

global $wpdb;
define( 'XPOSTCS_DB_VERSION', '1.0.1' );
define( 'XPOSTCS_TABLE_NAME', $wpdb->prefix.'xpostcs_blogs' );
define( 'XPOSTCS_POSTS_TABLE_NAME', $wpdb->prefix.'xpostcs_posts' );

$plugin_dir = basename(dirname(__FILE__));
load_plugin_textdomain( 'xpostcs', 'wp-content/plugins/' . $plugin_dir, $plugin_dir );

?>