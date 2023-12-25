<?php
/**
 * Plugin Name:        Basic Shortcode
 * Plugin URI:         https://gaziakter.com/plugin/basic-shortcode/
 * Description:       Basic shortcode plugin is used for practice basic shortcode
 * Version:           1.0.0
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com
 * Tags:              basic, shortcode, plugin
 * Text Domain:       basic-shortcode
 * Tested up to:      6.4
 * Requires at least: 6.2
 * Requires PHP:      7.4
 * License:           GNU General Public License v2.0 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */



 /**
  * Button shortcode
  */
 function philosophy_button( $attributes ) {

    $default = array(
        'type'=>'primary',
        'title'=>__("Button",'philosophy'),
        'url'=>'',
    );

    $button_attributes = shortcode_atts($default,$attributes);


    return sprintf( '<a target="_blank" class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        $button_attributes['title']
    );
}

add_shortcode( 'button', 'philosophy_button' );



/**
 * Basic secound Button shortcode 
 */
function philosophy_button2( $attributes, $content='' ) {
    $default = array(
        'type'=>'primary',
        'title'=>__("Button",'philosophy'),
        'url'=>'',
    );

    $button_attributes = shortcode_atts($default,$attributes);


    return sprintf( '<a target="_blank" class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        do_shortcode($content)
    );
}

add_shortcode( 'button2', 'philosophy_button2' );


/**
 * Uppercase shortcode
 */
function philosophy_uppercase($attributes, $content=''){
    return strtoupper(do_shortcode($content));
}
add_shortcode('uc','philosophy_uppercase');


/**
 * Google map shortcode
 */
function philosophy_google_map($attributes){
    $default = array(
        'place'=>'Dhaka Museum',
        'width'=>'800',
        'height'=>'500',
        'zoom'=>'14'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap','philosophy_google_map');
