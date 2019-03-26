<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 26-3-2019
 * Time: 09:15
 */


foreach($_POST['auto'] as $auto) {
    echo "<img src='plaatjes/".$auto.".jpg'>";
}

