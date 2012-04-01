noc-display
-----------
noc-display is a simple web page that embeds multiple iframes within the page
and uses impress.js to move between the iframes. Each iframe is reloaded before
being displayed. The goal was to build a cool animated display that you might
find on the wall in a network operations center (NOC).

LICENSE:
--------
impress.js is licensed under the MIT and GPL licenses. See
https://github.com/bartaz/impress.js for more information

All other code is Copyright (C) 2012 Jason Hancock 
http://geek.jasonhancock.com and is licensed under the MIT license

INSTALLATION:
-------------
Stick the contents of the noc-display directory somewhere under the
document root of your webserver. Open up config.php and load up the
`urls` config array with the urls you want to display in the iframes.
You can put as many urls as you like in the array.

The iframes are laid out in a grid pattern. Change the `items_per_column`
config option to adjust how many elements appear in each column of the
grid.

You can adjust the width and height of the iframes by changing the
`frm_width` and `frm_height` parameters. The time between transitions can be
configured with the `frm_delay_ms` parameter. 

Once you have it all configured, point your browser at index.php
