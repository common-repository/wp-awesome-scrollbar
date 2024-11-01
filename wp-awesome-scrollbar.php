<?php
/**
Plugin Name: WP Awesome Scrollbar
Plugin URI: http://www.wpshaper.com/plugins/wp-awesome-scrollbar
Description: WP Awesome Scrollbar is highly customizable WordPress scrollbar plugin. Features include vertical and horizontal scrollbar.
Author: wpshaper
Version: 1.0
Author URI: http://www.wpshaper.com
Copyright: 2015 wpshaper
License URI: license.txt
*/

// Register Scripts & Styles
function wpshaper_scrollbar_scripts() {
	wp_enqueue_style( 'scrollbar-style', plugins_url('/css/scrollbar-style.css', __FILE__) );
	wp_enqueue_style( 'wp-awesome-scrollbar', plugins_url('/css/wp-awesome-scrollbar.css', __FILE__) );
	wp_enqueue_script( 'scrollbar-script', plugins_url('/js/scrollbar-script-min.js', __FILE__), array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpshaper_scrollbar_scripts' );

// Register Scripts & Styles in Admin panel
function wpshaper_scrollbar_admin_scripts() {
	wp_enqueue_style( 'wp-awesome-scrollbar-admin', plugins_url('/css/wp-awesome-scrollbar-admin.css', __FILE__) );
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'iris', admin_url( 'js/iris.min.js' ), array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), false, 1 );
	wp_enqueue_script( 'cp-active', plugins_url('/js/cp-active.js', __FILE__), array('jquery'), '', true );
	
}
add_action( 'admin_enqueue_scripts', 'wpshaper_scrollbar_admin_scripts' );

function scrollbar_style(){?>

<?php if( get_option('styles') == 'style1'){ ?>

	<script>
		(function(jQuery){
			jQuery(window).load(function(){
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"light-thick",
					scrollbarPosition:"outside"
				});
			});
		})(jQuery);
	</script>
    
    <?php }elseif(  get_option('styles') == 'style2' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
				theme:"rounded-dots",
				scrollInertia:400
				});
			});
		})(jQuery);
	</script>	
		
	<?php }elseif(  get_option('styles') == 'style3' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){	
		
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					axis:"x",
					theme:"dark-thin",
					autoExpandScrollbar:true,
					advanced:{autoExpandHorizontalScroll:true}
				});
			});
		})(jQuery);
	</script>
    	
	<?php }elseif(  get_option('styles') == 'style4' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){	
						
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					axis:"x",
					theme:"light-3",
					advanced:{autoExpandHorizontalScroll:true}
				});
			});
		})(jQuery);
	</script>
    
    <?php }elseif(  get_option('styles') == 'style5' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){			
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"3d-thick"
				});
			});
		})(jQuery);
	</script>
    
    <?php }elseif(  get_option('styles') == 'style6' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){			
				jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					axis:"yx",
					scrollButtons:{enable:true},
					theme:"3d",
					scrollbarPosition:"outside"
				});
			});
		})(jQuery);
	</script>
    		
	<?php }elseif(  get_option('styles') == 'style7' ){ ?>
		<script>
		(function(jQuery){
			jQuery(window).load(function(){		
				
					jQuery("<?php $container = get_option('container'); if(!empty($container)) {echo $container;} else {echo ".container";}?>").mCustomScrollbar({
					scrollButtons:{enable:true,scrollType:"stepped"},
					keyboard:{scrollType:"stepped"},
					mouseWheel:{scrollAmount:188},
					theme:"rounded-dark",
					autoExpandScrollbar:true,
					snapAmount:188,
					snapOffset:65
				});
				
			});
		})(jQuery);
	</script>
    
    <?php }
	 }
add_action('wp_footer', 'scrollbar_style', 999);

// Call main function
function wpshaper_scrollbar_shortcode() {
	
}
add_shortcode( 'scrollbar-shortcode', 'wpshaper_scrollbar_shortcode' );

//Include Files
foreach ( glob( plugin_dir_path( __FILE__ )."lib/*.php" ) as $php_file )
    include_once $php_file;