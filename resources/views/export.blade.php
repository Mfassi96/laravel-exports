<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exportar informacion a excel</title>
</head>
<body>
    <h1 class="display-1">Datos de usuarios</h1>
    <a href="{{route('export')}}" class="btn btn-success">Exportar a excel 📗</a>
    <table class="table">
        <td>NOMBRE</td>
        <td>EMAIL</td>
        <td>CREADO</td>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
        @endforeach
    </table>


</body>
</html>