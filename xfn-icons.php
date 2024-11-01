<?php
/*
Plugin Name: XFN Icons
Plugin URI: http://dunvegan.ath.cx/blogs/sam/2008/04/05/xfn-links/
Description: Adds Icons after links according to wether you've specified XFN or not. XFN (XHTML Friends Network) is a way of adding properties to links to specify relationships between the two sites, or the two subjects of the sites. Wordpress supports them by default, and you can add them by looking further down the page on the "Add Links" Page in the Admin Area. 
Version: 1.1
Author: Samuel Elliott
Author URI: http://dunvegan.ath.cx/~sam/
*/
/*
  Copyright (C) 2008  Samuel Elliott  (email : ashe613@gmail.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

add_action('wp_head', 'xfn_icons_wp_head');
function xfn_icons_wp_head() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/xfn-icons/xfn-icons.css" />';
	};

?>