<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $_pageTitle; ?></title>
</head>
<body class="bg-slate-100">
    <div class="grid gap-y-3 p-3 sm:flex sm:justify-center sm:grid sm:gap-y-3 w-screen sm:p-3">
        <div class="w-full sm:w-[616px] p-10 rounded bg-white">
            <h1 class='text-3xl text-neutral-900 font-bold'>Bonjour <?php echo $_SESSION['username']; ?></h1>
            <form method="POST">
                <button type="submit" name="submit_deconnexion">Déconnexion</button>
            </form>
        </div>
        
        <?= $_pageContent; ?>
    </div>
</body>
</html>
