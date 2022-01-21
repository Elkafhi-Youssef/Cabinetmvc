<?php


    class AdminDoctor extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('doctors');
        }
        //  function index call of all books
        public function index(){
            $this->loadView('admin'.DS.'doctors',[]);

        }
          
        // function for get all doctors from db
        public function getAllDoctors(){
            $data = $this->modelInstance->getAllDoctors('doctor');
            // print_r($data);
            $this->loadView('admin'.DS.'doctors',$data); 
            
        }
        public function deleteDoctor($id){
            $this->modelInstance->deleteDoctor($id);
           
            $this->redirect(URLROOT.'/AdminDoctor/getAllDoctors');
        }
    }
?>