<h1>Aregar Estudiante</h1>
<?php
echo $this->Form->create('student');
echo $this->Form->input('name',array('label'=>'Nombre'));
echo $this->Form->input('last_name',array('label'=>'Apellidos'));
echo $this->Form->button(__('guardar estudiante'));
echo $this->Form->end();
?>
