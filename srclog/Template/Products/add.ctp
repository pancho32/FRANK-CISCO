<h1>Dar de alta producto</h1>
<?php
echo $this->Form->create('producto');
echo $this->Form->input('name',array('label'=>'Nombre'));
echo $this->Form->input('cost',array('label'=>'costo'));
echo $this->Form->input('n_piece',array('label'=>'Numero de Piezas'));
echo $this->Form->input('description',array('label'=>'Descripcion'));
echo $this->Form->button(__('Guardar Producto'));
echo $this->Form->button(__('Inicio'));
echo $this->Form->end();
?>