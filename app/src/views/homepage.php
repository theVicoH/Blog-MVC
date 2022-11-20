<?php
foreach ($Post as $post) {
    $userPost = $userManager->getUsernameById($post->getUserId());
?>

    <div class="w-full sm:w-[616px] grid gap-y-6 rounded-md bg-white pb-7">
        <h2 class="pt-7 px-7 text-2xl text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
        
        <?php
        if ($post->getImage() != "/uploads/") { ?>
            <div class="h-96 w-full bg-[url('../../<?php echo $post->getImage(); ?>')] bg-cover bg-center"></div>
        <?php
        }
        ?>
        
        <p class="px-7 text-gray-500"><?php echo $post->getContent(); ?></p>


        <p class="px-7 text-sm text-gray-400">by <span class="font-bold"><?php echo $userPost["username"]; ?></span> on <?php echo $post->getDatetime(); ?></p>


        <form action="/ajouter-commentaire" method="POST" class='grid grid-cols-10 gap-x-2 px-7'>

            <input class='col-span-8 w-auto border-2 border-indigo-200 rounded-full py-1 px-5 text-gray-500 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none placeholder:text-indigo-200' type="text" name="comment" placeholder="Comment">

            <input type="hidden" name="postId" value="<?php echo $post->getId(); ?>">

            <button class="col-span-2 rounded-full text-white bg-indigo-400" type="submit" name="reply-btn">Reply</button>
        </form>
        <div class="grid gap-y-4">
            <?php foreach($Comment as $comment){
            if($comment->getPostId() === $post->getId()){   
                $userCom = $userManager->getUsernameById($comment->getUserId());
            ?>  
                <div class="grid gap-y-1 mx-7 bg-slate-50 rounded-md px-7 py-3">
                    <div class="flex justify-between items-center">
                        <p class="pr-2 text-base font-bold text-indigo-400"><?php echo $userCom['username'];?></p>
                        <span class="text-sm text-slate-300"><?php echo $comment->getDateTime();?></span>
                    </div>
                    <p class='text-sm text-gray-500'><?php echo $comment->getContent();?></p>
                </div>
                
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
        
    </div>
    
<?php
}
?>
<a href="/ajouter-post" class="fixed text-4xl text-indigo-400 top-[50px] right-[50px]">+</a>