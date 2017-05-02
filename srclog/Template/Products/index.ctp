<h1> Listado de Productos </h1>

<table>
    
    <tr>
    
        <td>
        <?php echo $this->Html->link('AGREGAR PRODUCTO',['action'=> 'add']) ?>
    </td>
    </tr>
    
</table>







<table>
    
<tr>
<th>
    Id
    </th>
<th>
    Nombre
    
    </th>
<th>
    Costo
    
    </th>
<th>
    Numero de piezas
    
    </th>
<th>
    Descripcion
    
    </th>
    
<th>
    Borrar
    
    </th>
 <th>
    Editar
    
    </th>
    </tr>
<?php foreach ($Productos as $Productos): ?>
<tr>
    <td><?php echo ($Productos-> id); ?>  </td>
    <td><?php echo ($Productos-> name); ?>  </td>
    <td><?php echo ($Productos-> cost); ?>  </td>
    <td><?php echo ($Productos-> n_piece); ?>  </td>
    <td><?php echo ($Productos-> description); ?>  </td>
    <td><?php echo $this->Form->postLink(
    'Delete',
    ['action' => 'delete', $Productos->id],
    ['confirm' => 'Estas seguro que desea borrar el producto?']);
        ?></td>
    <td>
        <?php echo $this->Html->link('Edit',['action'=> 'edit', $Productos->id]) ?>
    </td>
   
</tr>

<?php endforeach; ?>


</table>
