<h1>listado de cursos</h1>
<table>
<th>
id
</th>
<th>
name
</th>
<th>
descripccion
</th>
<th>
teacher_id
</th>
<th>
Borrar
</th>
<?php foreach ($cursos as $cursos): ?>

<tr>
    <td><?php echo ($cursos-> id); ?>  </td>
    <td><?php echo ($cursos-> name); ?>  </td>
    <td><?php echo ($cursos-> description); ?>  </td>
    <td><?php echo ($cursos-> teacher_id); ?>  </td>
    <td><?php echo $this->Form->postLink(
    "delete",
    ['action' => 'delete',  $cursos->id],
    ['confirm' => 'Estas seguro?']); ?>  </td>
<tr>
    
    
<?php endforeach; ?>

</table>