<?php
/*
Plugin Name: Api techsysprogram
Description: Créer des produits sur un autre site via l'API WooCommerce
Author: techsysprogram
Version: 1.1
Plugin URI: https://www.techsysprogram.com/
Author URI: https://www.techsysprogram.com/
*/

if (!defined('ABSPATH')) {
    exit;
}

//aqui el comienzo de short code
function executer_funcion_checkbox()
{
    // Load plugin files.
    include "checkbox.php";
}
add_shortcode('short_checkbox', 'executer_funcion_checkbox');