<!DOCTYPE html>
<html lang="es">
<head>
    <title>Paginación de Usuarios Prueba Técnica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            font-weight: bold;
            background-color: #f2f2f2;
        }
        .pagination {
            margin-top: 20px;
            display: inline-block;
        }
        .pagination ul {
            list-style-type: none;
            padding: 0;
        }
        .pagination li {
            display: inline;
            margin: 0 5px;
        }
        .pagination a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid black;
            border-radius: 3px;
            background-color: #e0e0e0;
        }
        .pagination a:hover {
            background-color: #d4d4d4;
        }
        .pagination .active {
            font-weight: bold;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Paginación de Datos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>RUT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->rut }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $usuarios->links() }}
    </div>
</body>
</html>
