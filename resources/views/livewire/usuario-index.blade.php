<div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Usuarios</h3>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edad</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($usuarios as $usuario)
                  <tr>
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['nombre']}}</td>
                    <td><span class="badge bg-info">{{$usuario['email']}}</span></td>
                    <td>{{$usuario['edad']}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- <button wire:click='incrementar' class="btn btn-success">+</button>
    <button wire:click='decrementar' class="btn btn-danger">-</button>
    <input wire:model='nombre' type="text">
    <h1>{{$valor}}</h1>
    <h1>hola mi nombre es: {{$nombre}}</h1> --}}


</div>
