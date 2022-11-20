


<?php
    foreach ($Post as $post) { ?>
    <div class="sm:w-96 grid gap-5 container rounded-md bg-white p-10">
        <h2 class="text-3xl text-neutral-900 font-semibold"><?php echo $post->getTitle();?></h2>
        <div class="h-96 w-full rounded-md bg-[url('../../<?php echo $post->getImage();?>')] bg-cover bg-center"></div>
        <p><?php echo $post->getContent();?></p>
        <p><?php echo $post->getDatetime();?></p>
    </div>
    
<?php 
}

?>