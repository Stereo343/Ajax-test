<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 23/05/2018
 * Time: 14:19
 */

header("Content-Type: text/plain");
$var1 = isset($_GET['parametre1']) ? $_GET['parametre1'] : "";
$var2 = isset($_GET['parametre2']) ? $_GET['parametre2'] : "";

if ($var1 != "" && $var2 != "") {
    echo "yeeeeees CA VROUUUUUUM";
} else {
    echo "et meeeerde ça plante";
}
?>