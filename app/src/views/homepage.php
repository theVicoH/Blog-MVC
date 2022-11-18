

<?php
    foreach ($Post as $post) { ?>
    <h2><?php echo $post->getTitle();?></h2>
    <img src="<?php echo $post->getImage();?>" alt="Image de Chat">
    <p><?php echo $post->getContent();?></p>
    <p><?php echo $post->getDateTIme();?></p>
<?php 
}
?>