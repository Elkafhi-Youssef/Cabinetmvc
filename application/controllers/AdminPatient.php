<?php


    class AdminPatient extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('patients');
        }
        //  function index call of all books
        public function index(){
            $this->loadView('admin'.DS.'patients',[]);

        }
        public function getAllPatients(){
            $data = $this->modelInstance->getAllPatients('patient');
            // print_r($data);
            $this->loadView('admin'.DS.'patients',$data);
        }
        public function deletePatient($id){
            $this->modelInstance->deletePatient($id);
           
            $this->redirect(URLROOT.'/AdminPatient/getAllPatients');
        } 
    }
?>