<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar envios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #7fced8;">
<div class="text-center">
    <h2>EDITAR ENVIO</h2>
    <form action="{{route('envios.update', $envio)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
               <label for=""><strong>Nombre</strong></label>
               <input type="text" name="nombre" id="nombre" class="form-contol" value="{{old('nombre', $envio->nombre)}}" placeholder="Nombre de quien recibe" >
            </div>
            <div class="col-md-6 mb-3">
               <label for=""><strong>Direccion</strong></label> 
               <input type="text" name="direccion" id="direccion" class="form-contol" value="{{old('direccion', $envio->direccion)}}" placeholder="Direccion de entrega">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
               <label for=""><strong>Telefono</strong></label>
               <input type="text" name="telefono" id="telefono" class="form-contol" value="{{old('telefono', $envio->telefono)}}"  placeholder="Telefono de contacto" >
            </div>
            <div class="col-md-6 mt-3">
               <label for=""><strong>Correo</strong></label>
               <input type="text" name="correo" id="correo" class="form-contol" value="{{old('correo', $envio->correo)}}" placeholder="correo electronico ">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="text-center">
             <div>
               <button class="btn btn-success col-md-2 mt-2">Guardar</button>
             </div>
             <div >
               <a href="/envios" class="btn btn-info col-md-2 mt-2">Volver</a>
             </div>
        </div>
        </div>
    </form>
</div>
</body>
</html>