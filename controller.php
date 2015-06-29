<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 20/04/2015
 * Time: 11:40
 */

session_start();

define( 'ABSPATH', dirname(__FILE__) );
include_once (ABSPATH.DIRECTORY_SEPARATOR.'conf'.DIRECTORY_SEPARATOR.'_connect.php');

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRIPPED);
$option = filter_input(INPUT_GET, 'opt', FILTER_SANITIZE_STRIPPED);

if(file_exists(MODELE_DIR.'/'.$page.'.php')) {
    include_once (MODELE_DIR.'/'.$page.'.php');

    if($vue != '') {
        include_once VIEW_DIR.'\page'.'.php';
    }
} else {
        $vue = 'default';
        include_once VIEW_DIR.'\page.php';
}

?>