<script src="https://cdn.tailwindcss.com"></script>
<?php
if($_SESSION['role']==="admin"){

foreach ($User as $user) { ?>
    <div class="text-xl text-indigo-400 p-[20px]">
        <form action="afficher-users" method="POST">
        Nom d'utilisateur : <?php echo $user->getUsername(); ?>
        | Email : <?php echo $user->getEmail(); ?>
        | Role: <?php echo $user->getRole(); ?>
            <input type="hidden" name="userId" value="<?php echo $user->getId()?>">
            <button type="submit" name="submit_delete_user" class="text-s text-white bg-indigo-400 py-2 px-4 rounded-full ml-2">delete ❌</button>
        </form>
    </div>
    <div class="w-[800px] border border-indigo-400 ml-4"></div>
<?php
    }
} else {
    ?><h1>vous n'etes pas admin</h1><?php
}
?>
<a href="/homepage" class="fixed text-xl text-indigo-400 top-[50px] right-[50px] underline">⬅️retourner à l'acceuil</a>