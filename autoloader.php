<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 22/04/2015
 * Time: 13:44
 */

session_start();

define( 'ABSPATH', dirname(__FILE__) );
include_once (ABSPATH.DIRECTORY_SEPARATOR.'conf'.DIRECTORY_SEPARATOR.'_connect.php');


include_once ABSPATH . '\conf\_connect.php';

var_dump($_REQUEST);

var_dump($_FILES);

/* Creation de la fonction autoloader */
function my_autoloader($className) {
    echo '<pre>Autoload : ' . $className;
    $path = CLASS_DIR . '\\' . $className.'.php';

    echo "\n =&gt; $path</pre>";
    require $path;

    include CLASS_DIR.$className.'.php';
}

spl_autoload_register('my_autoloader');



$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRIPPED);
$option = filter_input(INPUT_GET, 'opt', FILTER_SANITIZE_STRIPPED);

if(file_exists(MODELE_DIR.'/'.$page.'.php')) {
    include_once (MODELE_DIR.'/'.$page.'.php');

    if($vue != '') {
        include_once VIEW_DIR.'\page'.'.php';
    }
} else {
    $vue = 'default';
    include_once VIEW_DIR . '\page.php';
}