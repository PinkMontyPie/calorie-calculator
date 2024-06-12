<?php
/*
Plugin Name: CI Calorie calculator
Plugin URI: https://www.calculator.io/calorie-calculator/
Description: This calorie calculator computes how many calories are required daily to maintain, decrease, or gain weight. Learn about the different types of calories and how they affect you.
Version: 1.0.0
Author: Calorie Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_calorie_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Calorie Calculator by www.calculator.io";

function display_calcio_ci_calorie_calculator(){
    $page = 'index.html';
    return '<h2>Calorie Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_calorie_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_calorie_calculator', 'display_calcio_ci_calorie_calculator' );