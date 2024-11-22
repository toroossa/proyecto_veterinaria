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
                <th>Nombre </th>
                <th>Telefono</th>
                <th>Horario de atención</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veterinarios as $veterinario)           
            <tr class="text-center mt-4">
                <th>{{$veterinario->nombre}}</th>
                <th>{{$veterinario->telefono}}</th>
                <th>{{$veterinario->horario}}</th>
                <th>
                   <a href="{{route('citas.create', )}}" class="btn btn-info  ">Agendar cita</a>
                </th>
            </tr>
            @endforeach
        </tbody>       
    </table>
    <div class="text-center">
    <a href="/products" class="btn btn-secondary w-45">Volver</a>
    </div>
    <div>
        {{$veterinarios->links()}}
    </div>
</body>
</html>
