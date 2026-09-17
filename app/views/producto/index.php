<h1>Listado de Productos</h1>
<?php if (!empty($productos)){ ?>

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

<?php } else{ ?>
<p> no hay productos para mostrar</p>
<?php } ?>

<h1>producto consultado</h1>
<?php if (!empty($productoConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
    </tr>

<?php foreach ($productoConsultado as $producto): ?>
    <tr>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay productos consultados para mostrar</p>
<?php } ?>