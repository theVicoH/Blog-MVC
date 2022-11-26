<div class="flex h-screen justify-center items-center">
    <form action="register" method="POST" class="grid">

        <input type="text" class="rounded-md border-2 border-indigo-400 m-1 text-2xl" name="username" placeholder="username" required>
        <input type="email" class="rounded-md border-2 border-indigo-400 m-1 text-2xl" name="email" placeholder="email" required>
        <input type="password" class="rounded-md border-2 border-indigo-400 m-1 text-2xl" name="password" placeholder="password" required>
        <input type="password" class="rounded-md border-2 border-indigo-400 m-1 text-2xl" name="confirmPassword" placeholder="confirmPassword" required>
        <button type="submit" class="text-sm text-white bg-indigo-400 py-2 px-4 rounded m-1">S'inscrire</button>

        <p>Se connecter <a href="login" class="text-indigo-400">ici</a>.</p>
    </form>
</div>