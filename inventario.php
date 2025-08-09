<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_dos.css">
    <title>Sistema de inventario</title>
</head>
<body>

    <div  class="imagen">
        <img class="imagen" src="LOGO-NUALA-COLORES-021-2.png" alt="Logo de Tienda">
    </div>

    <nav>
        <select name="Tiendas" id="">
            <option value="">Maracay</option>
            <option value="">Valencia</option>
            <option value="">Turmero</option>
            <option value="">Cagua</option>
        </select>
    </nav>

    <h1>inventario de Productos</h1>

    <table>
        <thead>

            <tr>
                <th>Referencias</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>

        </thead>
        <tbody>

            <tr>
                <td>0001</td>
                <td>Cobijas para Bebe</td>
                <td>12.58$</td>
                <td>100</td>
            </tr>

        </tbody>
    </table>
    /*........................................................................ */
    <div class="filtro-container">
    <div class="filtro-grupo">
        <label for="fecha-inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha-inicio" name="fecha-inicio">
    </div>
    <div class="filtro-grupo">
        <label for="fecha-fin">Fecha de Fin:</label>
        <input type="date" id="fecha-fin" name="fecha-fin">
    </div>
    <button type="button" class="btn-filtrar">Filtrar</button>
</div>

<h2>Historial de Movimientos</h2>

<table>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Producto</th>
            <th>Tipo</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2025-08-01</td>
            <td>Cobijas para Bebe</td>
            <td>Entrada</td>
            <td>+50</td>
        </tr>
        <tr>
            <td>2025-08-05</td>
            <td>Cobijas para Bebe</td>
            <td>Salida</td>
            <td>-10</td>
        </tr>
    </tbody>
</table>


    
</body>
</html>