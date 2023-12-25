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
