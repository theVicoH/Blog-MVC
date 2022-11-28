<div class="grid gap-y-3 p-3 sm:flex sm:justify-center sm:grid sm:gap-y-3 w-screen sm:p-3">
    <div class="w-full sm:w-[616px] p-7 rounded bg-white grid gap-y-3 sm:flex sm:justify-between sm:items-center">
        <h2 class='text-3xl text-indigo-400 font-semibold'>Bonjour <?php echo $_SESSION['username']; ?></h2>
        <form method="POST">
            <button class='text-sm text-white bg-indigo-400 py-2 px-4 rounded' type="submit" name="submit_deconnexion">Logout</button>
        </form>
    </div>
    <?php
    foreach ($Post as $post) {
        $userPost = $userManager->getUsernameById($post->getUserId());
    ?>
        <div class="w-full sm:w-[616px] grid gap-y-6 rounded-md bg-white pb-7">

            <div class="pt-7 px-7 flex justify-between items-center">
                <!--  Titre du post -->
                <h2 class="text-2xl text-indigo-400 font-semibold"><?php echo $post->getTitle(); ?></h2>
                 <!-- effacer un post -->
                 <?php if($_SESSION['id']===$post->getUserId() || $_SESSION['role']==="admin"){?>
                    <form action="homepage" method="POST" class="ml-7 text-red-400 font-semibold py-1 text-sm">
                        <input type="hidden" name="postId" value="<?php echo $post->getId()?>">
                        <button type="submit" name="submit_delete_post">delete</button>
                    </form>
                <?php } ?>
            </div>

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


            <!-- commenter le post -->
            <form action="/ajouter-commentaire" method="POST" class='grid grid-cols-10 gap-x-2 px-7'>

                <input class='col-span-8 border-2 border-indigo-200 rounded-full py-1 px-5 text-gray-500 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none placeholder:text-indigo-200' type="text" name="comment" placeholder="Comment">

                <input type="hidden" name="postId" value="<?php echo $post->getId(); ?>">
                <input type="hidden" name="comId" value="<?php echo "null" ?>">
                <button class="col-span-2 rounded-full text-white bg-indigo-400" type="submit" name="reply-btn">Reply</button>
            </form>

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
        
                            <!-- Contenu du commentaire -->
                            <p class='text-sm text-gray-500 max-w-[504px]' style="word-wrap: break-word;"><?php echo $comment->getContent();?></p>
                        
                            
                            <!-- Bouton réponse au commentaire -->
                            <form action="/ajouter-commentaire" method="POST" class="grid grid-cols-10 gap-x-2">
                                <input type="text" name="comment" placeholder="Comment" class="col-span-8 border-2 border-slate-200 rounded-full bg-slate-100 px-5 text-sm placeholder:text-slate-300 focus:text-gray-700 focus:bg-slate-100 focus:border-slate-300 focus:outline-none">
                                <input type="hidden" name="postId" value="<?php echo $post->getId(); ?>">
                                <input type="hidden" name="comId" value="<?php echo $comment->getId() ?>">
                                <button type="submit" class="col-span-2 text-indigo-400 font-semibold py-1 text-sm">Répondre</button>
                            </form> 

                        </div>

                        <div class="flex ml-7">
                            <?php if($_SESSION['id']===$comment->getUserId() || $_SESSION['role']==="admin"){?>
                                <form action="homepage" method="POST" class="ml-7 text-indigo-400 font-semibold py-1 text-sm">
                                    <input type="hidden" name="comId" value="<?php echo $comment->getId()?>">
                                    <button type="submit" name="submit_delete">delete</button>
                                </form>
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
                                    <p class="text-sm text-gray-500 max-w-[476px]"><?php echo $respond->getContent();?></p>
                                </div>
        
                            </div>
                        </div>

                        <div class="flex ml-7">
                            <?php if($_SESSION['id']===$respond->getUserId() || $_SESSION['role']==="admin"){?>
                                <form action="homepage" method="POST" class="ml-7 text-indigo-400 font-semibold py-1 text-sm">
                                    <input type="hidden" name="comId" value="<?php echo $respond->getId()?>">
                                    <button type="submit" name="submit_delete">delete</button>
                                </form>
                            <?php } ?>
                        </div>

                        <?php }
                        } 
                    }
                } ?>
        </div>
        
    <?php
    }
    ?>
    <a href="/ajouter-post" class="fixed text-4xl text-indigo-400 top-[50px] right-[50px]">+</a>
    <a href="/edit" class="fixed text-2xl text-indigo-400 top-[50px] left-[50px]">edit</a>

    <?php if($_SESSION['role']==="admin"){?>
    <a href="/afficher-users" class="fixed text-2xl text-indigo-400 top-[100px] left-[50px]">Voir les utilisateurs</a>
    <?php } ?>

</div>