<?php

$config = require_once('config.php');
$offset_x = 2 * $config['frm_width'];
$offset_y = 2 * $config['frm_height'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <title>Display</title>
    
    <link href="css/noc-display.css" rel="stylesheet" />

    <style type="text/css">
        iframe { 
            width: <?php echo $config['frm_width']; ?>px; 
            height: <?php echo $config['frm_height']; ?>px; 
            border:none; 
            text-align: center; 
        }
    </style>

    <script type="text/javascript">
    </script>
</head>

<body class="impress-not-supported">

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">

    <?php
    for($i=0; $i<count($config['urls']); $i++) {
        $x = floor($i/$config['items_per_column']) * $offset_x;
        $y = ($i % $config['items_per_column']) * $offset_y;
        $rotate = floor(90 - rand(0, 180));
        printf('
            <div class="step" data-x="%d" data-y="%d" data-rotate="%d">
                <iframe id="frame%d" src="%s"></iframe>
            </div>',
            $x,
            $y,
            $rotate,
            $i,
            $config['urls'][$i]
        );
        
    }
   
    printf('<div class="step" data-x="%d" data-y="%d" data-scale="8"></div>',
        floor(count($config['urls']) / $config['items_per_column']) * $offset_x / 2,
        $config['items_per_column'] * $offset_y / 2
    );
    ?>

</div>

<script src="js/impress.js"></script>
<script>
    impress().init();

    var delay = <?php echo $config['frm_delay_ms']; ?>;
    var frame_count=0;
    var frames_total=<?php echo count($config['urls']); ?>;
    setTimeout("advance()", delay);

    function advance() {
        frame_count++;
        if(frame_count == frames_total) {
            frame_count = 0;
        }
        var reload_id='frame' + frame_count;
        document.getElementById(reload_id).src = document.getElementById(reload_id).src;
        impress().next(); 
        setTimeout("advance()", delay);
    }
</script>

</body>
</html>
