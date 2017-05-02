<h1>Listado de estudiates</h1>

<table>
<th>
    id
    </th>
<th>
    name
    </th>
<th>
    Accion
    </th>
<th>
    Edit
    </th>    
<tr>
</tr>   
<?php foreach ($estudiantes as $estudiantes):?>
<tr>
<td><?php echo ($estudiantes->id);?></td>
<td>
    <?php echo $this->Html->link(
    $estudiantes->name,
    ['action'=>'view', $estudiantes->id],
    ['confirm'=>'are you sure?']);
    ?></td>
    
    
 <td><?php echo $this->Form->postLink(
    "Delete",
    ['action'=>'delete', $estudiantes->id],
    ['confirm'=>'are you sure?']);
     ?></td>
        <?php echo $this->Html->link('Edit',['action'=>'edit',$estudiantes->id])?>
       
    
</tr>
    

<?php endforeach; ?>
</table>




