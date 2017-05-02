<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class CoursesTable extends Table{
        public function validationDefault(validator $validator){
    $validator = new Validator();
    $validator 
        ->notEmpty('name', 'Please fill this field')
        ->requirePresence('name');
    
    return $validator;
}
    public function initialize(array $config){
        $this->table('courses');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Teachers',[
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER'
       
        ]);
   $this->belongsToMany('Students',[
       'foreignKey'=>'students_id',
       'targetForeignKey'=>'courses_id',
       'joinTable'=>'students_courses'
   ]);
    }
}
?>