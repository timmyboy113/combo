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
            $(\"#driver\").click(function(event){
               $('#stage').css('color', 'red')
            });
         });
      </script>


<div align='center'>

  <div id = \"stage\">
         <h1 bg-color='blue'>Ich bin Rot</h1>
      </div>
		
      <input type = \"button\" id = \"driver\" value = \"Load Data\" />
		

</div>
");



?>