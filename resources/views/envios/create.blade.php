<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #045b75;">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container p-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card shadow-lg p-4" style="max-width: 700px; width: 100%;">
                <h3 class="text-center text-primary mb-4">Ingresa la informacion de envio envío</h3>
                <form action="{{ route('envios.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de quien recibe" >
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label"><strong>Dirección</strong></label>
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección de envío" >
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label"><strong>Teléfono</strong></label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono de contacto" >
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label"><strong>Correo</strong></label>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" >
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/products" class="btn btn-info w-45">Volver</a>
                        <button type="submit" class="btn btn-success w-45">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>
</html>

