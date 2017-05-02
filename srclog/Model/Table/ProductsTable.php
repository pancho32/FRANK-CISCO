<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table{
    public function validationDefault(validator $validator)
    {
        $validator = new Validator();
        $validator
            
            ->notEmpty('name','Ingresa el nombre')
            ->requirePresence("name")
            
            ->notEmpty('n_piece','Ingresa el numero de piezas')
            ->requirePresence("n_piece")
            
            ->notEmpty('description','Ingresa la descripcion')
            ->requirePresence("description")
        
            ->notEmpty('cost','Ingresa el costo')
            ->requirePresence("cost");
        
        
        return $validator;
    }
}
?>