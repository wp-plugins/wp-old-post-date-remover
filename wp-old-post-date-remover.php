<?php
/**
 * Plugin Name: WP Old Post Date Remover
 * Plugin URI: http://benandjacq.com
 * Description: Remove the date on posts and pages over 2 weeks old with no code necessary. 
 * Version: 1.0.1
 * Author: Ben Meredith
 * Author URI: http://benandjacq.com/
 * License: GPL2
 */
 /*  Copyright 2014  Ben Meredith  (email : ben@benandjacq.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* The Plugin Class */
defined('ABSPATH') or die("No script kiddies please!");
function wp_OPDR_is_Old_Enough ()
	{
		$today = date("r");
		$articledate = get_the_time('r');
		$difference = round((strtotime($today) - strtotime($articledate))/(24*60*60),0);

            if ($difference >= 14) {
			wp_enqueue_style( 'remove-style-meta', plugins_url( 'css/OPDRstyle.css', __FILE__ ), false, '1.0', 'all' );
		} else {
			
		}
	};
add_action('loop_start', 'wp_OPDR_is_Old_Enough');	



