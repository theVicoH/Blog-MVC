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
        <div class="w-full sm:w-[616px] p-7 rounded bg-white grid gap-y-3 sm:flex sm:justify-between sm:items-center">
            <h2 class='text-3xl text-indigo-400 font-semibold'>Bonjour <?php echo $_SESSION['username']; ?></h2>
            <form method="POST">
                <button class='text-sm text-white bg-indigo-400 py-2 px-4 rounded' type="submit" name="submit_deconnexion">Logout</button>
            </form>
        </div>
        
        <?= $_pageContent; ?>
    </div>




</body>

</html>
