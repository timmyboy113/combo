<?php
/**
 * Created by PhpStorm.
 * User: Bexline
 * Date: 05.10.2017
 * Time: 17:52
 */

include 'need/header.php';
include 'need/top-menu.php';

print('

<style>
.button {
margin-left: 5px;
margin-right: 5px;
margin-top: 5px;
margin-bottom: 5px;

} 
</style>


<div align="center" style="padding-top: 10px; padding-left: 5%; padding-right: 5%;">

    <button type="button" class="btn btn-outline-dark button" style="background-color:#1db992;" onclick="window.location.href=\'js-load-textfile.php\'">Load textfile</button>
    <button type="button" class="btn btn-outline-dark button" style="background-color:#1db992;" onclick="window.location.href=\'js-change_color.php\'">Change color</button>
    <button type="button" class="btn btn-outline-dark button" style="background-color:#1db992;" onclick="window.location.href=\'js-replace-with.php\'">Change text</button>



</div>

');



include 'need/bottm-menu.php';
?>