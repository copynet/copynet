<?php
// Add new input type "border width"
if ( function_exists('smile_add_input_type'))
{
  smile_add_input_type('margin' , 'margin_settings_field' );
}

add_action( 'admin_enqueue_scripts', 'enqueue_margin_param_scripts' );
function enqueue_margin_param_scripts( $hook ){
	$cp_page = strpos( $hook, CP_PLUS_SLUG);
  $data  =  get_option( 'convert_plug_debug' );

	if( $cp_page !== false && isset( $_GET['style-view'] ) && $_GET['style-view'] == "edit" ){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'margin-script', SMILE_FRAMEWORK_URI . '/lib/fields/margin/js/margin.js', array('jquery') );
		
		wp_enqueue_style( 'jquery-ui' );
		if( isset( $data['cp-dev-mode'] ) && $data['cp-dev-mode'] == '1' ) {
			wp_enqueue_style( 'margin-style', SMILE_FRAMEWORK_URI . '/lib/fields/margin/css/margin.css' );
		}
	}
}

/**
* Function to handle new input type "border width"
*
* @param $settings    - settings provided when using the input type "border"
* @param $value     - holds the default / updated value
* @return string/html   - html output generated by the function
*/
function margin_settings_field($name, $settings, $value)
{
  $input_name = $name;
  $type = isset($settings['type']) ? $settings['type'] : '';
  $class = isset($settings['class']) ? $settings['class'] : '';
  $output = '<p><textarea id="margin-code" class="content form-control smile-input smile-'.$type.' '.$input_name.' '.$type.' '.$class.'" name="' . $input_name . '" rows="6" cols="6">'.$value.'</textarea></p>';

$pairs = explode("|", $value );
$settings = array();
if( is_array( $pairs ) && !empty( $pairs ) && count( $pairs ) > 1 ) {
  foreach( $pairs as $pair ){
    $values = explode(":", $pair);
    $settings[$values[0]] = $values[1];
  }
}

$all_sides = isset( $settings['all_sides'] )   ? $settings['all_sides']  : 1;
$top      = isset( $settings['top'] )        ? $settings['top']       : 1;
$left     = isset( $settings['left'] )       ? $settings['left']      : 1;
$right    = isset( $settings['right'] )      ? $settings['right']     : 1;
$bottom   = isset( $settings['bottom'] )     ? $settings['bottom']    : 1;

ob_start();
echo $output;
?>
<div class="box">
  <div class="holder">
    <div class="frame">
      <div class="setting-block all-sides">
          <div class="row">
            <label for="margin"><?php _e( "All Sides", "smile" ); ?></label>
            <label class="align-right" for="margin-all_sides">px</label>
            <div class="text-1">
              <input id="margin-all_sides" type="text" value="<?php echo $all_sides; ?>">
            </div>
          </div>
          <div id="slider-margin-all_sides" class="slider-bar large ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><span class="range-quantity" ></span></div>
      </div>    
      <div class="setting-block">
        <div class="row">
          <label for="top"><?php _e( "Top", "smile" ); ?></label>
          <label class="align-right" for="top">px</label>
          <div class="text-1">
            <input id="margin-top" type="text" value="<?php echo $top; ?>">
          </div>
        </div>
        <div id="slider-margin-top" class="slider-bar large ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a><span class="range-quantity" ></span></div>
        <div class="row mtop15">
          <label for="margin-left"><?php _e( "Left", "smile" ); ?></label>
          <label class="align-right" for="left">px</label>
          <div class="text-1">
            <input id="margin-left" type="text" value="<?php echo $left; ?>">
          </div>
        </div>
        <div id="slider-margin-left" class="slider-bar large ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a><span class="range-quantity" ></span></div>
        <div class="row mtop15">
          <label for="right"><?php _e( "Right", "smile" ); ?></label>
          <label class="align-right" for="right">px</label>
          <div class="text-1">
            <input id="margin-right" type="text" value="<?php echo $right; ?>">
          </div>
        </div>
        <div id="slider-margin-right" class="slider-bar large ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a><span class="range-quantity" ></span></div>
        <div class="row mtop15">
          <label for="bottom"><?php _e( "Bottom", "smile" ); ?></label>
          <label class="align-right" for="bottom">px</label>
          <div class="text-1">
            <input id="margin-bottom" type="text" value="<?php echo $bottom; ?>">
          </div>
        </div>
        <div id="slider-margin-bottom" class="slider-bar large ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a><span class="range-quantity" ></span></div>
      </div>
    </div>
  </div>
</div>  

<?php
  return ob_get_clean();
}