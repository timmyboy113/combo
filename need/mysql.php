<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 27.12.2015
 * Time: 11:09
 */

$servername = "localhost";
$username = "root";
$password = "";
$database = "combo";

$mysqli = new mysqli($servername, $username, $password, $database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* Create table doesn't return a resultset
if ($mysqli->query("SELECT") === TRUE) {
    printf("Table myCity successfully created.\n");
}
*/
/* Select queries return a resultset */
if ($result = $mysqli->query('SELECT ajax_werte.`value` FROM ajax_werte WHERE ajax_werte.var_name = "wert" ')) {
    print($result->fetch_row()[0]);

    /* free result set */
    $result->close();
}

/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */
if ($result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT)) {

    /* Note, that we can't execute any functions which interact with the
       server until result set was closed. All calls will return an
       'out of sync' error */
    if (!$mysqli->query("SET @a:='this will not work'")) {
        printf("Error: %s\n", $mysqli->error);
    }
    $result->close();
}

$mysqli->close();



?>