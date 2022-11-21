<?php
foreach ($Post as $post) {
    $userPost = $userManager->getUsernameById($post->getUserId());
?>

    <div class="w-full sm:w-[616px] grid gap-y-6 rounded-md bg-white pb-7">

        <!--  Titre du post -->
        <h2 class="pt-7 px-7 text-2xl text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
        
        <!-- image du post -->
        <?php
        if ($post->getImage() != "/uploads/") { ?>
            <div class="h-96 w-full bg-[url('../../<?php echo $post->getImage(); ?>')] bg-cover bg-center"></div>
        <?php
        }
        ?>

        <!-- contenu du post -->
        <p class="px-7 text-gray-500"><?php echo $post->getContent(); ?></p>

        <!-- nom user + date post -->
        <p class="px-7 text-sm text-gray-400">by 
        <span class="font-bold"><?php echo $userPost["username"]; ?></span> 
        on <?php echo $post->getDatetime(); ?></p>


        <!-- commtenter le post -->
        <form action="/ajouter-commentaire" method="POST" class='grid grid-cols-10 gap-x-2 px-7'>
            <input class='col-span-8 border-2 border-indigo-200 rounded-full py-1 px-5 text-gray-500 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none placeholder:text-indigo-200' type="text" name="comment" placeholder="Comment">
            <input type="hidden" name="postId" value="<?php echo $post->getId(); ?>">
            <input type="hidden" name="comId" value="<?php echo "null" ?>">
            <button class="col-span-2 rounded-full text-white bg-indigo-400" type="submit" name="reply-btn">Reply</button>
        </form>


        <!-- commentaires du post -->
        <div class="grid gap-y-4">

        <!-- on récup les coms et l'id de l'utilisateur -->
            <?php foreach($Comment as $comment){
            if($comment->getPostId() === $post->getId() && $comment->getComId() === null){   
                $userCom = $userManager->getUsernameById($comment->getUserId());
            ?>  

                <!-- div du commentaire -->
                <div class="grid gap-y-2 mx-7 bg-slate-100 rounded-md px-7 py-3">

                    <div class="flex justify-between items-center">
                        <!-- affichage de l'Username -->
                        <p class="text-base font-bold text-indigo-400"><?php echo $userCom['username'];?></p>
                        <!-- affichage du Datetime -->
                        <span class="text-sm text-slate-300"><?php echo $comment->getDateTime();?></span>
                    </div>

                    <!-- Contenu du commentaire -->
                    <p class='text-sm text-gray-500'><?php echo $comment->getContent();?></p>


                    <!-- Bouton réponse au commentaire -->
                    <form action="/ajouter-commentaire" method="POST" class="grid grid-cols-10 gap-x-2">
                        <input type="text" name="comment" placeholder="Comment" class="col-span-8 border-2 border-slate-200 rounded-full bg-slate-100 px-5 text-sm placeholder:text-slate-300 focus:text-gray-700 focus:bg-slate-100 focus:border-slate-300 focus:outline-none">
                        <input type="hidden" name="postId" value="<?php echo $post->getId(); ?>">
                        <input type="hidden" name="comId" value="<?php echo $comment->getId() ?>">
                        <button type="submit" class="col-span-2 text-indigo-400 font-semibold py-1 text-sm">Répondre</button>
                    </form>
                    
                </div>



                <!-- on récup l'id du com de base et celui du com réponse -->
                <?php foreach($Comment as $respond){
                    if($comment->getId()=== $respond->getComId()){
                        $userRespond = $userManager->getUsernameById($respond->getUserId())
                    ?>

                    <!-- div du commentaire -->
                    <div class="grid gap-y-2 bg-slate-50 mr-7 ml-14 px-7 py-3 rounded-md">
                        <div class="flex justify-between items-center">
                            <!-- pseudo -->
                            <p class="text-indigo-400 font-bold text-base"><?php echo $userRespond['username'];?></p>
                            <!-- Datetime -->
                            <span class="text-sm text-slate-300"><?php echo $comment->getDateTime();?></span>
                            
                        </div>
                        <!-- <button>x</button> -->
                        <p class="text-sm text-gray-500"><?php echo $respond->getContent();?></p>
                    </div>
                        <?php
                        }
                    }
                }
            }
            ?>
        </div>
        
    </div>
    
<?php
}
?>
<a href="/ajouter-post" class="fixed text-4xl text-indigo-400 top-[50px] right-[50px]">+</a>