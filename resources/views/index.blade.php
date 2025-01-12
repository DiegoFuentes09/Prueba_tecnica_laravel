<!DOCTYPE html>
<html lang="es">
<head>
    <title>Paginación de Usuarios Prueba Tecnica</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
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

    <div>
        {{ $usuarios->links() }}
    </div>
</body>
</html>
