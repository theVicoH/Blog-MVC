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
<body class="bg-white">
    <a href="/homepage" class="fixed text-xl text-indigo-400 top-[50px] right-[50px] underline">⬅️retourner à l'acceuil</a>
     
    <div>
        <form action="/ajouter-post" method="POST" enctype='multipart/form-data'>

        <div class="form">
            
            <input type="text" class="rounded-md border-2 border-indigo-400 m-1 text-2xl"  id="title" name="title" placeholder="title" required>
        </div>

        <div class="form">
            <textarea id="content" class="rounded-md border-2 border-indigo-400 m-1 text-2xl" name="content" rows="5" cols="33" placeholder="content" required></textarea>
        </div>

        <div class="form">
            <input type="file" name='file' class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-black-100 file:text-indigo-400 hover:file:bg-indigo-100 m-1">
        </div>
        
        <button type="submit" class="text-sm text-white bg-indigo-400 py-2 px-4 rounded m-1">Publier</button>

        </form>
    </div>
</body>
</html>