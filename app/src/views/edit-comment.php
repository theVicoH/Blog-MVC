<?php foreach($Comment as $comment){
    $id = $_SESSION["id"];
    if($comment->getUserId() === $id) {   
    $userCom = $userManager->getUsernameById($comment->getUserId());
?>  
        <div>
                    
            <div class="grid gap-y-2 mx-7 bg-slate-100 rounded-md px-7 py-3">
    
                <div class="flex justify-between items-center">
                    <p class="text-base font-bold text-indigo-400"><?php echo $userCom['username'];?></p>
                    <span class="text-sm text-slate-300"><?php echo $comment->getDateTime();?></span>
                </div>
    
                <p class='text-sm text-gray-500 max-w-[504px]' style="word-wrap: break-word;"><?php echo $comment->getContent();?></p>
        </div>

<?php
        }
    }
?>
                    







<form action="/homepage" method="POST">
    <input type="hidden" name="comId" value="<?php echo $comment->getId()?>">

    <input type="text" name="new_content" placeholder="edit_content">
    <button class="rounded-full text-white bg-indigo-400 px-3 py-1" type="submit" name="edit_btn">edit</button>

</form> 

<a href="homepage"><button class='text-sm text-white bg-indigo-400 py-2 px-4 rounded' type="submit">annuler</button></a>