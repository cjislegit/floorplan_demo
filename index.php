<?php

/*
Plugin Name: Floor Plan Demo
Description: A floor plan proof of concept
Version: 1.0
Author: Carlos
*/

// If this file is called directly, abort!!!
defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

function subscribe_link(){
    return "This is a test yo!";
}

add_shortcode('subscribe', 'subscribe_link');