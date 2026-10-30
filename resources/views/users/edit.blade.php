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
        <form method="POST" action="{{route('users.update',['user'=>$user->id])}}" >
            @csrf    
            @method("PUT")
            <label>name</label>
            <input type="text" name="name" value="{{$user->name}}" />
            <br />
            <label>email</label>
            <input type="email" name="email" value="{{$user->email}}"  />
            <br />
        
            <input type="submit" />


</form>
</body>
</html>