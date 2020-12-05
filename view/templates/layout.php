<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="jquery/jquery.min.js"></script>
        <script src="jquery/form.js"></script>
        <script src="jquery/flag.js"></script>
        <link href="css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div style="width: 100%; border-bottom: 4px double black;float: left">
            
        <?php
        echo '<h1>'.$title.'</h1>';       
        echo '</div>';
        echo '<div style="padding: 4px; float: left; width: 100%; border-bottom: 4px double bblack;">';
            
                if (isset($content)) {
                    echo $content;
                }
                ?>						
        </div> <!-- /.inner-content -->
        <div style="text-align: center; width: 100%; border-top: 4px double black;float: left">
            <p>Scamdowen Test assignment</p>
        </div>
    </body>
</html>