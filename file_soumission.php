<?php
/*
Plugin Name:        File soumission
Description:        Plugin qui permet de modifier le style et le comportement de l'input type file de la page soumission
Version:            1.0.0
Author:             Jaël Atam
Author URI:         portfolio.jaelatam.com
*/

class file_soumission
{
    public function __construct()
    {
        add_action('init', [$this, 'init']);
    }

    public function init()
    {
        wp_enqueue_script('input_file', plugins_url('js/input_file.js', __FILE__), ['jquery'], '1.0.0', true);

        wp_enqueue_style('input_file', plugins_url('css/input_file.css', __FILE__));
    }
}

new file_soumission();
