<?php 
// Add custom style
function add_custom_style(){ ?>

<style type="text/css">
.mCSB_scrollTools .mCSB_draggerRail {
  background:<?php $color1 = get_option('color1'); if(!empty($color1)) {echo $color1;} else {echo "#111111";}?> !important;
}
.mCS-light-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCS-dark-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
  background-color: <?php $color = get_option('color'); if(!empty($color)) {echo $color;} else {echo "#eeeeee";}?> !important;
  border-radius: <?php $border_radius = get_option('border_radius'); if(!empty($border_radius)) {echo $border_radius;} else {echo "16";}?>px;
  height:<?php $scrollbar_height = get_option('scrollbar_height'); if(!empty($scrollbar_height)) {echo $scrollbar_height;} else {echo "150";}?>px;
}
.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCS-3d.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar, .mCS-3d.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar, .mCS-3d.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar, .mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar, .mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar, .mCS-3d-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar, .mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar, .mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar, .mCS-3d-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
  background-color: <?php $color = get_option('color'); if(!empty($color)) {echo $color;} else {echo "#eeeeee";}?> !important;
}
</style>

<?php }
add_action('wp_footer', 'add_custom_style');