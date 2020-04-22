<?php
/*
 * Plugin Name: TimeStamp
 * Plugin URI:
 * Description: Добавление в cookies времени последнего посещения
 * Version: 0.0.1
 * Author: Margaret Ivanova
 * Author URI:
 * License: GPLv2 or later
 */
add_action( 'init', 'add_Date' );

function add_Date() {
    setcookie("last_date", date("r"), time()+60*60*24*40, "/");
}