<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des utilisateur</title>
</head>
<body>
    <h1> List des utilisateur </h1>
    <a href="{{route('users.create')}}" >Ajouter un nouveau utilisateur </a>
    <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>date création</th>
            <th>afficher</th>
            <th>modifier</th>
            <th>supprimer</th>
</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
     <td><a href="{{route('users.show',['user'=>$user->id])}}">Afficher</a></td>
   
    <td><a href="{{route('users.edit',['user'=>$user->id])}}">modifier</a></td>
    <td>

        <form method="post" action="{{route('users.destroy',['user'=>$user->id])}}" >
        @csrf
        @method("delete")
        <input type="submit" value="delete" />

</form>

    </td>
    
</tr>
@endforeach
</table>
</body>
</html>