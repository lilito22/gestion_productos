<h1>Listado de Productos</h1>

<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>categoria</th>
    </tr>

    <?php foreach ($productos as $productoModel): ?>
    <tr>
        <td><?= $productoModel['nombre'] ?></td>
        <td><?= $productoModel['precio'] ?></td>
        <td><?= $productoModel['categoria'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>