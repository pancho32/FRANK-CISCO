<h1>Agregar Curso</h1>
<?php
    echo $this->Form->create('course');
    echo $this->Form->input('name',array('label'=>'Nombre'));
    echo $this->Form->input('description',array('label'=>'Description'));
    echo $this->Form->input('teacher_id',array('label'=>'teacher'));
    echo $this->Form->input('students_id',array('label'=>'Alumnos por Cursar',['options'=>$students]));
    echo $this->Form->button(__('Guardar Curso'));
    echo $this->Form->end();
?>