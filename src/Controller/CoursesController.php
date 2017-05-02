<?php
namespace App\Controller;

use App\Controller\AppController;

class CoursesController extends AppController{
    
    public function delete ($id){
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if($this->Courses->delete($course)){
            $this->Flash->success(__('el curso: {0} se borro.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
        }
    
    
    public function add(){ 
    $course = $this->Courses->newEntity();
        if($this->request->is('post')){
            $course = $this->Courses->patchEntity($course, $this->request->data());
            $course->create =date("Y-m-d h:i:s");
            $course->modified =date("Y-m-d h:i:s");
            if($this->Courses->save($course)){
                $this->Flash->success(__('Tu maestro has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            if($course->errors()){
            $error_msg = [];
            foreach( $course->errors()as $errors){
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
            $this->Flash->error(__("plase fix the following errors(s):".implode("\n\r",$error_msg)));
        }
            //$this->Flash->error(__('No se puede añadr estudiante'));
        }
        $teachers= $this->Courses->Teachers->find('list', ['limit' => 200]);
        $students= $this->Courses->Students->find('list', ['limit' => 200]);
            $this->set(compact('course', 'teachers','students'));
            $this->set('_serialize', ['course']);
    }
    
    
    public function index (){
        $this->set('cursos',$this->paginate());
        
    }
}

?>