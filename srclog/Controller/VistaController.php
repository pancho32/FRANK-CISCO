<?php
namespace App\Controller;

use App\Controller\AppController;


class VistaController extends AppController{
    
    public function initialize(){
        parent::initialize();
        
        $this->loadComponent('Flash');
    }
    
    public function index()
    {
       
    }
}
?>