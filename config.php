<?php
/*
 * By default, items are laid out on a grid. We go down the columns before
 * moving over to the next row. For example, if you have 4 items (A, B, C, D)
 * and items_per_column is set to 2, they would get laid out on a grid like this:
 *
 *   A   C
 *
 *   B   D
 */
return array(
    'max_angle'        => 180,     // A setting of 180 means it will pick a
                                   // random angle between -90 and 90 degrees.
                                   // If you do NOT want the iframes rotated at
                                   // all, set this to 0
    'frm_width'        => 800,     // Width of each iframe, in pixels 
    'frm_height'       => 600,     // Height of each iframe, in pixels
    'frm_delay_ms'     => 10000,   // Delay between iframe transitions, in 
                                   // milliseconds
    'items_per_column' => 2,       // How many items per column
    'urls'             => array(   // The list of urls. You can put as many
                                   // urls in here as you wish
        'http://weather.com',
        'http://cnn.com',
        'http://slashdot.org'
    ),
);
