<h1>Listado de Productos</h1>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>categoria</th>
        <th>proveedor</th>
    </tr>

    <?php foreach ($productos as $productoModel): ?>
    <tr>
        <td><?= $productoModel['id'] ?></td>
        <td><?= $productoModel['nombre'] ?></td>
        <td><?= $productoModel['precio'] ?></td>
        <td><?= $productoModel['categoria'] ?></td>
        <td><?= $productoModel['proveedor'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>