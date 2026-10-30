<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau utilisateur</title>
</head>
<body>
        <h1>ajputer un nouveau utilisateur</h1>
        <br />
        <form method="POST" action="{{route('users.store')}}" >
            @csrf    
            <label>name</label>
            <input type="text" name="name" />
            <br />
            <label>email</label>
            <input type="email" name="email" />
            <br />
            <label>password</label>
            <input type="password" name="password" />
            <br />
            <input type="submit" />


</form>
</body>
</html>