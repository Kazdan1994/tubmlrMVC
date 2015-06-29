<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 23/04/2015
 * Time: 10:03
 */


/**************************************/
/*
Le tableau $_FILES contient certaines informations sur les fichiers.
Pour chaque champ de type file, on peut obtenir les informations le concernant dans le tableau $_FILES[attribut_name].
*/
/**************************************/
$image_upload = $_FILES['image']['name'];     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_image.png).

$image_type = $_FILES['image']['type'];     //Le type du fichier. Par exemple, cela peut être « image/png ».

$image_index = $_FILES['image']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.

$image_error = $_FILES['image']['error'];    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.



/**************************************/
/*
Une première vérification consiste à savoir si le fichier a bien été uploadé.
Pour cela, nous allons utiliser le code d'erreur du fichier.
*/
/**************************************/
if ($image_error > 0)
{
    $erreur = "Erreur lors du transfert";
};


/**************************************/
/*
Je vais controler la validite des extensions à l'aide d'un tableau $extensions_valides qui contient les extensionsvalides,
et d'une condition if pour controler.
*/
/**************************************/
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (' . ').
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );

if (!in_array($extension_upload,$extensions_valides) )
{
    echo "Extension incorrecte";
}


//Deplacement de l'image


return move_uploaded_file($image_upload, $image_index);