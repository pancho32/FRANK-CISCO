<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class StudentsTable extends Table{
public function ValidationDefault(Validator $validator)
{

    $validator
    ->notEmpty('name','ingresa el nombre')
    ->requirePresence('name');
    return $validator;

}
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('students');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsToMany('Courses',[
            'foreignKey'=>'course_id',
            'targetForeignKey'=>'students_id',
            'joinTable'=>'students_courses'
        ]);
    }
}

?>