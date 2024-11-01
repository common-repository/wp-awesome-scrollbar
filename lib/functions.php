<?php 

// Add Menu page
function register_awesome_scrollbar_page() {
	add_submenu_page( 'options-general.php', 'WP Awesome Scrollbar', 'Scrollbar Settings', 'manage_options', 'wp-awesome-scrollbar', 'awesome_scrollbar_settings' );
}

function awesome_scrollbar_settings() { ?>

	<div class="wrap main_wrapper">
    <h2>WP Awesome Scrollbar Settings</h2>
    <div class="scrollbar_content">
    <form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
        
    	<label for="container" class="label_name">Container class/ID/Tag:<br />
        <small>Please use <strong>.</strong> for class or <strong>#</strong> for ID</small> </label>
        
    	<input type="text" name="container" id="container" value="<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>"  />
        <div class="clrFix"></div>
        
        <label for="styles" class="label_name">Choose Style:</label> 
        <select name="styles" id="styles">
            <option value="style1" <?php if( get_option('styles') == 'style1'){ echo 'selected="selected"'; } ?>>Style 1</option>
            <option value="style2" <?php if( get_option('styles') == 'style2'){ echo 'selected="selected"'; } ?>>Style 2</option>
            <option value="style3" <?php if( get_option('styles') == 'style3'){ echo 'selected="selected"'; } ?>>Style 3</option>
            <option value="style4" <?php if( get_option('styles') == 'style4'){ echo 'selected="selected"'; } ?>>Style 4</option>
            <option value="style5" <?php if( get_option('styles') == 'style5'){ echo 'selected="selected"'; } ?>>Style 5</option>
            <option value="style6" <?php if( get_option('styles') == 'style6'){ echo 'selected="selected"'; } ?>>Style 6</option>
            <option value="style7" <?php if( get_option('styles') == 'style7'){ echo 'selected="selected"'; } ?>>Style 7</option>
        </select>
        <div class="clrFix"></div>
        
        <label for="border_radius" class="label_name">Scrollbar Border Radius:</label>
    	<input type="text" name="border_radius" id="border_radius" value="<?php $border_radius = get_option('border_radius'); if(!empty($border_radius)) {echo $border_radius;} else {echo "16";}?>"  />
        <div class="clrFix"></div>
        
        <label for="scrollbar_height" class="label_name">Scrollbar Height:</label>
    	<input type="text" name="scrollbar_height" id="scrollbar_height" value="<?php $scrollbar_height = get_option('scrollbar_height'); if(!empty($scrollbar_height)) {echo $scrollbar_height;} else {echo "150";}?>" />
        <div class="clrFix"></div>
        
        <label for="scrollbar_color" class="label_name">Scrollbar Color:</label>        
        <input type="text" name="color" id="scrollbar_color" value="<?php $color = get_option('color'); if(!empty($color)) {echo $color;} else {echo "#eeeeee";}?>" class="color-picker" /><!--<img class="pick_color" src="<?php bloginfo('url' ); echo"/wp-content/plugins/wp-awesome-scrollbar/img/color-picker.png"; ?>" alt="color picker" />-->
        <div class="clrFix"></div>
        
        <label for="scrollbar_color" class="label_name">Scrollbar Background Color:</label>        
        <input type="text" name="color1" id="scrollbar_color" value="<?php $color1 = get_option('color1'); if(!empty($color1)) {echo $color1;} else {echo "#111111";}?>" class="color-picker" /><!--<img class="pick_color_2" src="<?php bloginfo('url' ); echo"/wp-content/plugins/wp-awesome-scrollbar/img/color-picker.png"; ?>" alt="color picker" />-->
        <div class="clrFix"></div>
        
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="container, styles, orientation_status, direction, border_radius, scrollbar_height, color, color1" />
    <input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" class="button button-primary" />
	</form>
    
    <div class="clrFix"></div>
    </div>
    
    <div class="scrollbar_sidebar">
    </div>
    
    
	</div>

<?php }
add_action('admin_menu', 'register_awesome_scrollbar_page');