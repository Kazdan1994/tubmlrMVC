<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 21/04/2015
 * Time: 14:54
 */

$nom = '';
$prenom = '';
$motDePasse = '';
$verifMotDePasse = '';
$login = '';
$error = FALSE;

if(!empty($_SESSION) &&
    isset($_SESSION['nom'],
        $_SESSION['prenom'],
        $_SESSION['error'])
){
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $error = TRUE;
}

$vue = 'login';