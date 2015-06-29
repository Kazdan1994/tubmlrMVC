<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$objImages = new classImage();
$images = $objImages->getAllImages();

?>
<div id="header">
    <nav>
        <form method="POST" action="index.php?page=single">
            <p>
        <select name="singleimage">
            <option value="ALL">Toutes les images</option>
            <?php
            
            foreach ($images as $key => $image) {
                ?>
            <option value="<?php echo $image['idImage'] ?>"><?php echo $image['nomImage'];?></option>
            <?php
            }
            
            ?>
        </select>
        <input type="submit" value="Envoyer">
            </p>
    </form>

        <p>
        <form enctype="multipart/form-data" action="index.php?page=fileupload" method="post">

            <input type="file" name="image" />

            <input id="submit" type="submit" value="Ajouter une photo" />
        </form>
        </p>
    </nav>
</div>

<?php
    foreach ($images as $key => $image) {
        ?>
        <figure class="">
            <div class="blocimg">
                <img src="<?php echo $objImages->encodeImage($image['real_path']); ?>" alt="<?php echo $image['nomImage'];?>">
            </div>

            <figcaption><?php echo $image['captionImage'].' ';?>
                <?php   if(isset($_SESSION['ID']))  {
                    if($image['idUser'] == $_SESSION['ID']) { ?>
                        <a href="delete.php?idImage=<?php echo $image['idImage'];?>" title="Supprimer">X</a>
                    <?php       }
                }?>
            </figcaption>

        </figure>

    <?php
}
?>