<h1>Listado de categoria</h1>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>descripcion</th>
    </tr>

    <?php foreach ($categorias as $categoriaModel): ?>
    <tr>
        <td><?= $categoriaModel['id'] ?></td>
        <td><?= $categoriaModel['nombre'] ?></td>
        <td><?= $categoriaModel['descripcion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>