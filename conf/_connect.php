<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 20/04/2015
 * Time: 11:47
 */

define('DSN', 'mysql:host=localhost; dbname=tumblrMVC;');

define('USER_BDD', 'root');

define('MDP_BDD', '');

define('MODELE_DIR', ABSPATH.'\modele');

define('VIEW_DIR', ABSPATH.'\views');

define('CLASS_DIR', ABSPATH.'\class');

define('DIR_IMG', ABSPATH.'\img'.'\\');

include CLASS_DIR.'\classBDD.php';

include CLASS_DIR.'\classImage.php';

include CLASS_DIR.'\classLog.php';

include CLASS_DIR . '\classUser.php';

?>