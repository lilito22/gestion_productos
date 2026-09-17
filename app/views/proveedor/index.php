<h1>Listado de Proveedores</h1>
<?php if (!empty($proveedores)){ ?>

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

<?php } else{ ?>
<p> no hay proveedores para mostrar</p>
<?php } ?>