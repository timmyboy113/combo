<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 27.12.2015
 * Time: 10:08
 */

include 'need/header.php';
include 'need/top-menu.php';


print("
    <head>
    <script src='need/jquery-2.1.4.min.js'></script>
    </head>"
);



print('<div align="center">
    Javascript output: </br>
   

    <p>Wert: </p>
    <P id="wert"></P>
    
    </div>
    
     <script>
    
    $(document).ready(function(){
    $("#wert").text("No Data");

    $("#wert").load("data/texts/ajax_wert.txt");
});
    
    </script>
    
    
');

include 'need/bottm-menu.php';
?>