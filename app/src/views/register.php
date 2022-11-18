<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

        
    <form action="register" method="POST">

    <div class="form">
        <input type="text" class="input"  id="username" name="username" placeholder="username" required>
    </div>

    <div class="form">
        <input type="text" class="input"  id="email" name="email" placeholder="email" required>
    </div>



    <div class="form">
        <input type="password" class="input"  id="password" name="password" placeholder="password" required>
    </div>

    <div class="form">
        <input type="password" class="input"  id="confirmPassword" name="confirmPassword" placeholder="confirmPassword" required>
    </div>


    <button type="submit" class="btn">S'inscrire</button>

    </form>
    <p>Se connecter <a href="login">ici</a>.</p>



    
</body>
</html>