<?php

$objImages = new classImage();
$images = $objImages->getAllImages();
?>

<div class="slideshow">
    <ul>


<?php
foreach ($images as $key => $image) {
?>
        <li>
            <img src="<?php echo $objImages->encodeImage($image['real_path']); ?>" alt="<?php echo $image['nomImage'];?>">
        </li>

              <!--  <figcaption><?php echo $image['captionImage'].' ';?>
                    <?php   if(isset($_SESSION['ID']))  {
                        if($image['idUser'] == $_SESSION['ID']) { ?>
                            <a href="delete.php?idImage=<?php echo $image['idImage'];?>" title="Supprimer">X</a>
                        <?php       }
                    }?>
                </figcaption>

            </figure>
        -->
<?php
}
?>
	</ul>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript"></script>