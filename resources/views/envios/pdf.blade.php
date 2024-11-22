<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 8px;
        }
        td {
            text-align: left;
            padding: 8px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Detalle del Envío</h1>
    <table>
        <tr>
            <th>Campo</th>
            <th>Detalle</th>
        </tr>
        <tr>
            <td><strong>Nombre</strong></td>
            <td>{{ $envio->nombre }}</td>
        </tr>
        <tr>
            <td><strong>Dirección</strong></td>
            <td>{{ $envio->direccion }}</td>
        </tr>
        <tr>
            <td><strong>Teléfono</strong></td>
            <td>{{ $envio->telefono }}</td>
        </tr>
        <tr>
            <td><strong>Correo</strong></td>
            <td>{{ $envio->correo }}</td>
        </tr>
    </table>
    <div class="footer">
        <p>Este es un documento generado automáticamente por el sistema.</p>
    </div>
</body>
</html>
