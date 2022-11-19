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
<body class="bg-slate-200 flex justify-center">
    <div class="grid gap-5 w-full h-full">
        <?= $_pageContent; ?>
    </div>
    
</body>
</html>
