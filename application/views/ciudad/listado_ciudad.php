<a href="/ciudad/nuevo">Nuevo</a><br>
<table border="1">
    <tr>
<th>id_ciudad</th>
<th>id_provincia</th>
<th>nombre</th>
<th>cod_postal</th>
<th>activo</th>
<th>Editar</th>
</tr>

    <?php foreach($rows as $row): ?>
    <tr>
<td><?php echo element($row, 'id_ciudad', ''); ?></td>
<td><?php echo element($row, 'id_provincia', ''); ?></td>
<td><?php echo element($row, 'nombre', ''); ?></td>
<td><?php echo element($row, 'cod_postal', ''); ?></td>
<td><?php echo element($row, 'activo', ''); ?></td>
<td><a href='/ciudad/editar/<?php echo element($row, 'id_ciudad', 0); ?>'>Editar</a></td>
</tr>

    <?php endforeach; ?>
</table>
    <?php echo $paginador; ?>
