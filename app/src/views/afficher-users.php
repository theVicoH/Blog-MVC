
<?php
if($_SESSION['role']==="admin"){

foreach ($User as $user) { ?>
    <div class="text-xl text-indigo-400 p-[20px]">
        <form action="afficher-users" method="POST">
        Nom d'utilisateur : <?php echo $user->getUsername(); ?>
        | Email : <?php echo $user->getEmail(); ?>
        | Role: <?php echo $user->getRole(); ?>
            <input type="hidden" name="userId" value="<?php echo $user->getId()?>">
            <button type="submit" name="submit_delete_user" class="text-s text-red-600 ml-2">delete</button>
            
            
            <input class='ml-2 col-span-8 border-2 border-indigo-200 rounded-full py-1 px-5 text-gray-500 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none placeholder:text-indigo-200' type="text" name="changerole-input" placeholder="user ou admin">
            <button class="text-s text-orange-600 ml-2" type="submit" name="changerole-btn">Changer son role</button>
            </form>
        </form>
    </div>
    <div class="w-[1300px] border border-indigo-400 ml-4"></div>
<?php
    }
} else {
    ?><h1>vous n'etes pas admin</h1><?php
}
?>
<a href="/homepage" class="fixed text-xl text-indigo-400 top-[50px] right-[50px] underline">⬅️retourner à l'acceuil</a>