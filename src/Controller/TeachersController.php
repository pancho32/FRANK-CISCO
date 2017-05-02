<?php
namespace App\Controller;
use App\Controller\AppController;

class TeachersController extends AppController{
public function index (){
    $this->set('teachers',$this->paginate());



}
}


?>