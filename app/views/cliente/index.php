<h1>Listado de clientes</h1>

<table>
    <tr>
        <th>nombre</th>
        <th>documento</th>
        <th>correo</th>
        <th>telefono</th>
    </tr>

    <?php foreach ($clientes as $clienteModel): ?>
    <tr>
        <td><?= $clienteModel['nombre'] ?></td>
        <td><?= $clienteModel['documento'] ?></td>
        <td><?= $clienteModel['correo'] ?></td>
        <td><?= $clienteModel['telefono'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>