<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de envios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #045b75;">
    <br>
    <table class="table table-striped-columns">
        <thead class="table-info ">
            <tr class="text-center mt-4">
                <th><strong>Nombre</strong> </th>
                <th><strong>Direccion</strong></th>
                <th><strong>Telefono</strong></th>
                <th><strong>Correo</strong></th>
                <th><strong>Detalle</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($envios as $envio )           
            <tr class="text-center mt-4">
                <td>{{$envio->nombre}}</td>
                <td>{{$envio->direccion}}</td>
                <td>{{$envio->telefono}}</td>
                <td>{{$envio->correo}}</td>
                <td>
                    <a href="{{route('envios.edit', $envio)}}" class="btn btn-info">Actualizar</a>
                    <form action="{{ route('envios.destroy', $envio) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </form>
                    <a href="{{ route('envios.pdf', $envio) }}" target="_blank" class="btn btn-primary">Descargar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="text-center">
      <a href="/products" class="btn btn-secondary w-45">Volver</a>
    </div>
    
    <div>
        {{$envios->links()}}
    </div>
</body>
</html>
