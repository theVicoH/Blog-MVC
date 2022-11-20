<?php
foreach ($Post as $post) {
    $User = $userManager->getUserUsername($post->getUserId());
?>

    <div class="w-full sm:w-[616px] grid gap-y-10 rounded-md bg-white">
        <div class="flex">
            <h2 class="text-2xl pt-10 px-10 text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
            
        </div>
        
        <?php
        if ($post->getImage() != "/uploads/") { ?>
            <div class="h-96 w-full bg-[url('../../<?php echo $post->getImage(); ?>')] bg-cover bg-center"></div>
        <?php
        }
        ?>

        <p class="pb-10 px-10"><?php echo $post->getContent(); ?></p>
        <p><?php echo $post->getDatetime(); ?></p>
        <p><?php echo $User["username"]; ?></p>


    </div>
<?php
}
?>