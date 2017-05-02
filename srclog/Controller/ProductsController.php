<?php
namespace App\Controller;
use App\Controller\AppController;

class ProductsController extends AppController{
    
     public function edit ($id = null){
        $productos=$this->Products->get($id);
        if($this->request->is(['post','put']))
        {
            
           $this->Products->patchEntity($productos,$this->request->data);
            if($this->Products->save($productos)){
            $this->Flash->success(__('su producto ha sido modificado'));
            return $this->redirect(['action'=>'index']);
         }
       
        $this->Flash->error(__('no ha sido modificado'));
        }
       $this->set('productos',$productos); 
    }
    
    
    
    public function delete ($id){
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)){
            $this->Flash->success(__('el producto: {0} se borro.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    
    
    
    public function add(){
    $product = $this->Products->newEntity();
    if ($this->request->is('post')){
        $product = $this->Products->patchEntity($product, $this->request->data());
        $product->created = date("Y-m-d H:i:s");
        $product->modified = date("Y-m-d H:i:s");
        if ($this->Products->save($product)){
            $this->Flash->success(__('Producto guardado.'));
            return $this->redirect(['action'=>'index']);
        }
        
        if($product->errors()){
            $error_msg = [];
            foreach( $product->errors()as $errors){
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
            $this->Flash->error(__("ingrese:".implode("\n\r",$error_msg)));
        }
       //$this->Flash->error(__('Unable to add your article.'));
    }
    $this->set('product',$product);
}
    
    
    public function index(){
    
    $this->set('Productos',$this->paginate());

}
}
?>