<?php
/* The Settings Page 
	This file creates an options page in the wp-admin area of your WordPress site 
	for specifying how many days you want for the date to show on your recent posts.
	
	This file is for use with the WP Old Post Date Remover plugin found at
	http://wordpress.org/plugins/wp-old-post-date-remover/
*/

defined('ABSPATH') or die("No script kiddies please!");
add_action( 'admin_menu', 'OPDR__add_admin_menu' );
add_action( 'admin_init', 'OPDR__settings_init' );



function OPDR__add_admin_menu(  ) { 

	add_options_page( 'WP Old Post Date Remover', 'Old Post Date Remover', 'manage_options', 'wp_old_post_date_remover', 'wp_old_post_date_remover_options_page' );

}


function OPDR__settings_exist(  ) { 

	if( false == get_option( 'wp_old_post_date_remover_settings' ) ) { 

		add_option( 'wp_old_post_date_remover_settings' );

	}

}


function OPDR__settings_init(  ) { 

	add_settings_section(
		'OPDR__pluginPage_section', 
		__( '', 'opdr' ), 
		'OPDR__settings_section_callback', 
		'pluginPage'
	);
	
	add_settings_field( 
		'opdr_days_to_show_date', 
		__( 'How many days would you like to display the date?', 'opdr' ), 
		'OPDR__text_field_0_render', 
		'pluginPage', 
		'OPDR__pluginPage_section' 
	);
	register_setting( 'pluginPage', 'opdr_days_to_show_date');

}


function OPDR__text_field_0_render(  ) { 

	$options = get_option( 'opdr_days_to_show_date' );
	?>
	<input type='number' min= '1' class= 'small-text' name='opdr_days_to_show_date' value='<?php echo $options; ?>'>
	<?php

}


function OPDR__settings_section_callback(  ) { 

	echo __( 'Add the number of DAYS you\'d like to display the date on your recent posts.', 'opdr' );

}


function wp_old_post_date_remover_options_page(  ) { 

	?>
	<form action='options.php' method='post'>
		<div class= "wrap">
		<h2>Old Post Date Remover Settings</h2>
		
		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>
		
	</form>
	<?php

}

