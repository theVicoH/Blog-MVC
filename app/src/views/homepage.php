<?php
foreach ($Post as $post) {
    $User = $userManager->getUserUsername($post->getUserId());
?>

    <div class="w-full sm:w-[616px] grid gap-y-6 rounded-md bg-white">
        <h2 class="pt-7 px-7 text-2xl text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
        
        <?php
        if ($post->getImage() != "/uploads/") { ?>
            <div class="h-96 w-full bg-[url('../../<?php echo $post->getImage(); ?>')] bg-cover bg-center"></div>
        <?php
        }
        ?>
        
        <p class="px-7 text-gray-500"><?php echo $post->getContent(); ?></p>

        <p class="px-7 text-sm text-gray-400"><?php echo "by " . $User["username"] . " on " . $post->getDatetime(); ?></p>
        <form class='grid grid-cols-10 gap-x-2 px-7 pb-7' method="post">
            <input class='col-span-8 w-auto border-2 border-indigo-200 rounded-full py-1 px-5 text-gray-500 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none placeholder:text-indigo-200' type="text" name="comment" placeholder="Comment">
            <button class="col-span-2 rounded-full text-white bg-indigo-400" type="submit">Reply</button>
        </form>
    </div>
<?php
}
?>