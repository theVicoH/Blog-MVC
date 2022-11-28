<div class="grid gap-y-3 p-3 sm:flex sm:justify-center sm:grid sm:gap-y-3 w-screen sm:p-3">
    <div class="w-full sm:w-[616px] p-7 rounded bg-white grid gap-y-3 sm:flex sm:justify-between sm:items-center">
        <h2 class='text-3xl text-indigo-400 font-semibold'>Edit Posts</h2>
    </div>
    <?php
    foreach ($Post as $post) {
        $userPost = $userManager->getUsernameById($post->getUserId());
    ?>
        <form action="edit" method="post" class="w-full sm:w-[616px] grid gap-y-6 rounded-md bg-white pb-7">
            <input type="hidden" name="editPostId" value="<?php echo $post->getId(); ?>">

            <!--  Titre du post -->
            <?php if($_SESSION['id']===$post->getUserId() ){?>
                <input name="editTitle" class="mt-7 mx-7 text-2xl text-indigo-400 font-semibold border-2 border-red-400 rounded" value="<?php echo $post->getTitle(); ?>">
            <?php } 
            else { ?>
                <h2 class="pt-7 px-7 text-2xl text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
            <?php } ?>

            <!-- image du post -->
            <?php
            if ($post->getImage() != "/uploads/") { ?>
                <div class="h-96 w-full bg-[url('../../<?php echo $post->getImage(); ?>')] bg-cover bg-center"></div>
            <?php
            }
            ?>

            <!-- contenu du post -->
            <?php if($_SESSION['id']===$post->getUserId()){?>
                <textarea name="editContent" class="mx-7 text-gray-500 border-2 border-red-400 rounded"><?php echo $post->getContent(); ?></textarea>
            <?php } else { ?>
                <p class="px-7 text-gray-500"><?php echo $post->getContent(); ?></p>
            <?php } ?>
            <!-- nom user + date post -->
            <p class="px-7 text-sm text-gray-400">by 
            <span class="font-bold"><?php echo $userPost["username"]; ?></span> 
            on <?php echo $post->getDatetime(); ?></p>
            <?php if($_SESSION['id']===$post->getUserId()){?>
                <div class="ml-7">
                    <button type="submit" name="editPost" class="px-4 py-1 rounded-full text-white bg-red-400">Edit</button>
                </div>
            <?php } ?>


            <!-- PARTIE COMMENTAIRE -->
            <!-- commentaires du post -->

                <!-- on récup les coms et l'id de l'utilisateur -->
                <?php foreach($Comment as $comment){
                if($comment->getPostId() === $post->getId() && $comment->getComId() === null){   
                    $userCom = $userManager->getUsernameById($comment->getUserId());
                ?>  
                    <div>
                        <!-- div du commentaire -->
                        <div class="grid gap-y-2 mx-7 bg-slate-100 rounded-md px-7 py-3">
        
                            <div class="flex justify-between items-center">
                                <!-- affichage de l'Username -->
                                <p class="text-base font-bold text-indigo-400"><?php echo $userCom['username'];?></p>
                                <!-- affichage du Datetime -->
                                <span class="text-sm text-slate-300"><?php echo $comment->getDateTime();?></span>
                            </div>
                            <input type="hidden" name="editCommentId" value="<?php echo $comment->getId(); ?>">
                            <!-- Contenu du commentaire -->
                            <?php if($_SESSION['id']===$comment->getUserId()){?>
                                <input name="editCommentContent" class="bg-slate-100 text-sm text-gray-500 font-semibold border-2 border-red-400 rounded" value="<?php echo $comment->getContent(); ?>">
                            <?php } else { ?>
                                <p class='text-sm text-gray-500 max-w-[504px]' style="word-wrap: break-word;"><?php echo $comment->getContent();?></p>
                            <?php } ?>

                            <?php if($_SESSION['id']===$comment->getUserId()){?>
                                <div>
                                    <button type="submit" name="editComment" class="px-4 py-1 text-sm rounded-full text-white bg-red-400">Edit</button>
                                </div>
                            <?php } ?>
                            
                        </div>
        
                        
                    </div>
                    <!-- PARTIE REPONSE -->
                    <!-- on récup l'id du com de base et celui du com réponse -->
                    
                        <?php foreach($Comment as $respond){
                        if($comment->getId()=== $respond->getComId()){
                            $userRespond = $userManager->getUsernameById($respond->getUserId())
                        ?>
                        <div class="grid gap-y-2">
                        <!-- div du commentaire -->
                            <div>
                                <div class="grid gap-y-1 bg-slate-50 mr-7 ml-14 px-7 py-3 rounded-md">
                                    <div class="flex justify-between items-center">
                                        <!-- pseudo -->
                                        <p class="text-indigo-400 font-bold text-base"><?php echo $userRespond['username'];?></p>
                                        <!-- Datetime -->
                                        <span class="text-sm text-slate-300"><?php echo $respond->getDateTime();?></span>
                                    </div>   
                                    <!-- contenu -->
                                    <input type="hidden" name="editRespondId" value="<?php echo $respond->getId(); ?>">
                                    <?php if($_SESSION['id']===$respond->getUserId()){?>
                                        <input name="editRespondContent" class="bg-slate-100 text-sm text-gray-500 font-semibold border-2 border-red-400 rounded" value="<?php echo $respond->getContent(); ?>">
                                    <?php } else { ?>
                                        <p class="text-sm text-gray-500 max-w-[476px]"><?php echo $respond->getContent();?></p>
                                    <?php } ?>
                                    <?php if($_SESSION['id']===$respond->getUserId()){?>
                                        <div>
                                            <button type="submit" name="editRespond" class="px-4 py-1 text-sm rounded-full text-white bg-red-400">Edit</button>
                                        </div>
                                    <?php } ?>
                                </div>
            

                            </div>
                        </div>
                        <?php }
                    }
                }
            } ?>
            
        </form>
        
    <?php
    }
    ?>
    <a href="/ajouter-post" class="fixed text-4xl text-indigo-400 top-[50px] right-[50px]">+</a>
    <a href="/homepage" class="fixed text-2xl text-indigo-400 top-[50px] left-[50px]">homepage</a>

    <?php if($_SESSION['role']==="admin"){?>
    <a href="/afficher-users" class="fixed text-2xl text-indigo-400 top-[100px] left-[50px]">Voir les utilisateurs</a>
    <?php } ?>

</div>