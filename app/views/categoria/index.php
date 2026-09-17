<h1>Listado de categoria</h1>
<?php if (!empty($categorias)){ ?>

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

<?php } else{ ?>
<p> no hay categorias para mostrar</p>
<?php } ?>