


<?php
    foreach ($Post as $post) { 
        $User = $userManager->getUserUsername($post->getUserId());
        ?>
    
    <div class="w-full sm:w-[616px] p-10 grid gap-y-5 rounded-md bg-white">
        <h2 class="text-3xl text-neutral-900 font-semibold"><?php echo $post->getTitle();?></h2>
        <?php
        if($post->getImage()!="/uploads/") { ?>
            <div class="h-96 w-full rounded-md bg-[url('../../<?php echo $post->getImage();?>')] bg-cover bg-center"></div>
        <?php 
        }
        ?>
        <p><?php echo $post->getContent();?></p>
        <p><?php echo $post->getDatetime();?></p>
        <p><?php echo $User["username"];?></p>
    </div>
<?php 
}
?>

