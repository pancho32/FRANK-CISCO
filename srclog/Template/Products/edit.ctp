<h1>Modificar Producto</h1>
<?php
echo $this->Form->create($productos);
echo $this->Form->input('name',array('label'=>'Nombre'));
echo $this->Form->input('cost',array('label'=>'Costo'));
echo $this->Form->input('n_piece',array('label'=>'numero de piezas'));
echo $this->Form->input('description',array('label'=>'Descripcion'));
echo $this->Form->button(__('guardar producto'));
echo $this->Form->end();
?>