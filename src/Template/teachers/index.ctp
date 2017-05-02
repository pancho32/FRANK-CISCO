<h1>Listado de estudiates</h1>

<table>
<tr>
<th>
    id
    </th>
<th>
    nombre
    </th>
<th>
    Accion
    </th>
<tr>
</tr>   
<?php foreach ($teachers as $teachers): ?>
<tr>
<td><?php echo ($teachers->id);?></td>
<td><?php echo ($teachers->name);?></td>
<td><?php echo ($teachers->last_name);?></td>
</tr><td><?php echo $this->Form->postLink(
    "Delete",
    ['action'=>'delete', $teachers->id],
    ['confirm'=>'are you sure?']);
    ?></td>

<?php endforeach; ?>
</table>