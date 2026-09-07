<h1>Listado de Proveedores</h1>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>ciudad</th>
        <th>direccion</th>
    </tr>

    <?php foreach ($proveedores as $proveedorModel): ?>
    <tr>
        <td><?= $proveedorModel['id'] ?></td>
        <td><?= $proveedorModel['nombre'] ?></td>
        <td><?= $proveedorModel['ciudad'] ?></td>
        <td><?= $proveedorModel['direccion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>