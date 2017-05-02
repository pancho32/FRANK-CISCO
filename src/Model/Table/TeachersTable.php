<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class TeachersTable extends Table{
    
  public function initialize(array $config){
        $this->table('teachers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Courses', [
            'foreignKey' => 'teacher_id'
        ]);
    }
    
    
    
        public function validationDefault(validator $validator){
    $validator = new Validator();
    $validator 
        ->notEmpty('name', 'Please fill this field')
        ->requirePresence('name');
    
    return $validator;
}
}
?>