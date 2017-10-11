<?php
/**
 * Created by PhpStorm.
 * User: Bexline
 * Date: 07.10.2017
 * Time: 13:53
 */

include 'need/header.php';
include 'need/top-menu.php';

print("

      <script >
         $(document).ready(function() {
            $(\"#output\").click(function(event){
               $('#output').replaceWith('<h1 align=\"center\" >Hallo. Ich bin der Output :3</h1>');
            });
         });
      </script>




  <div id = \"output\" align='center'>
         <h3>klicke auf mich</h3>
      </div>
		
		


");


include 'need/bottm-menu.php';
?>