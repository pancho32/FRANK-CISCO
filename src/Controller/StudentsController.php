<?php
namespace App\Controller;
use App\Controller\AppController;
class StudentsController extends AppController{

      public function delete($id){
      $this->request->allowMethod(['post', 'delete']);
      $student = $this->Students->get($id);
      if ($this->Students->delete($student)){
      $this->Flash->success(__('el estudiante: {0} borro.', h($id)));
          return $this->redirect(['action' =>'index']);
      }
                                        
    }
   public function edit($id = null){
       $estudiantes=$this->Students->get($id);
       if($this->request->is(['post'.'put'])){
           
       }
       $this->Students->patchEntity($estudiantes,$this->request->data);
       if($this->Students->save($estudiantes)){
           $this->Flash->success(__('your Student has.'));
           return $this->redirect(['action'=>'index']);
           
       }
       $this->set('estudiantes',$estudiantes);
   }
    public function view($id = null)
    {
        
        $student=$this->Students->get($id);
        $this->set('student',$student);
    }
 
    
    
    public function add(){
    $student = $this->Students->newEntity();
    if ($this->request->is('post')){
        $student = $this->Students->patchEntity($student, $this->request->data());
        $student->created = date("Y-m-d H:i:s");
        $student->modified = date("Y-m-d H:i:s");
        if ($this->Students->save($student)){
            $this->Flash->success(__('Estudiante Guardado.'));
            return $this->redirect(['action'=>'index']);
           
        }
        if($student->errors()){
            $error_msg = [];
            foreach( $student->errors()as $errors){
                if(is_array($errors)){
                    foreach($errors as $error){
                        $error_msg[] = $error;
                    }
                }else{
                    $error_msg[] = $errors;
                }
            }
        }
        if(!empty($error_msg)){
            $this->Flash->error(__("no ingresaste bien datos:".implode("\n\r",$error_msg)));
        }
       #$this->Flash->error(__('no se a ingresado.'));
    }
    $this->set('student',$student);

    }
     public function index (){
    $this->set('estudiantes',$this->paginate());
}

}
?>