<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Usuarios</title>
</head>
<body>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Edad</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuario as $usuario)
          <tr>
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['nombre']}}</td>
            <td>{{$usuario['email']}}</td>
            <td>{{$usuario['edad']}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>

</body>
</html>
