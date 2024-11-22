<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #045b75;">
    <div class="container p-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card shadow-lg p-4" style="max-width: 700px; width: 100%;">
                <h2 class="text-center text-primary mb-4">Ingrese la informacion</h2>
                <form action="{{ route('citas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del paciente" >
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label"><strong>Responsable</strong></label>
                        <input type="text" name="responsable" id="responsable" class="form-control" placeholder="Responsable del paciente" >
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label"><strong>Teléfono</strong></label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono de contacto" >
                    </div>
                    <div class="mb-3">
                        <label for="telefonodos" class="form-label"><strong>Teléfono</strong></label>
                        <input type="text" name="telefonodos" id="telefonodos" class="form-control" placeholder="Telefono de emergencia" >
                    </div>
                    <div class="mb-3">
                        <label for="detalles" class="form-label"><strong>Detalles </strong></label>
                        <input type="text" name="detalles" id="detalles" class="form-control" placeholder="Detalles del paciente" >
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-45">Agendar</button>
                        <a href="/veterinarios" class="btn btn-info w-45">Volver</a>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>
</html>
