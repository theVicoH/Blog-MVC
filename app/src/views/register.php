<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>

        
    <form action="register" method="POST">

    <div class="form">
        <input type="text" class="rounded-md border-2 border-indigo-400 m-1 text-2xl"  id="username" name="username" placeholder="username" required>
    </div>

    <div class="form">
        <input type="email" class="rounded-md border-2 border-indigo-400 m-1 text-2xl"  id="email" name="email" placeholder="email" required>
    </div>



    <div class="form">
        <input type="password" class="rounded-md border-2 border-indigo-400 m-1 text-2xl"  id="password" name="password" placeholder="password" required>
    </div>

    <div class="form">
        <input type="password" class="rounded-md border-2 border-indigo-400 m-1 text-2xl"  id="confirmPassword" name="confirmPassword" placeholder="confirmPassword" required>
    </div>


    <button type="submit" class="text-sm text-white bg-indigo-400 py-2 px-4 rounded m-1">S'inscrire</button>

    </form>
    <p>Se connecter <a href="login" class="text-indigo-400">ici</a>.</p>



    
</body>
</html>