<?php
namespace App\Controller;

use App\Controller\AppController;


class VentasController extends AppController{
    
    public function initialize(){
        parent::initialize();
        
        $this->loadComponent('Flash');
    }
    
    public function index()
    {
        $this->set('ventas',$this->paginate());
    }
}
?>