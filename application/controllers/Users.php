<?php


    class Users extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('User');

        }
        //  function index call of all books
        public function index(){
            $this->loadView('users'.DS.'home_user');

        }

      

        public function register()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'CIN'=> $_POST['CIN'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'tele' => $_POST['tele'],
                    'adresse'=> $_POST['adresse'],
                    'password' => $_POST['password'],
                    'CIN_err' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'tele_err' => '',
                    'adresse_err' => '',
                    'password_err' => '',
                ];

                echo  $_POST['CIN'].$_POST['name'].$_POST['email'].$_POST['tele'].$_POST['adresse'],$_POST['password'];
                if (empty($data['CIN'])) $data['CIN_err'] = 'Please fill your CIN';
                if (empty($data['name'])) $data['name_err'] = 'Please fill your name';
                if (empty($data['email'])) $data['email_err'] = 'Please fill your email';
                if (empty($data['tele'])) $data['tele_err'] = 'Please fill your telehone';
                if (empty($data['adresse'])) $data['adresse_err'] = 'Please fill your adresse';
                if (empty($data['password'])) $data['password_err'] = 'Please fill your password';
                // if ($data['password'] !== $data['confirm-password']) $data['confirm-password_err'] = "passwords don't match";
                // if (empty($data['confirm-password'])) $data['confirm-password_err'] = 'Please fill your confirm password';
                //check if email exist
                // if ($this->userModel->getUserByEmail($data['email'])) {
                //     $data['email_err'] = 'Email already taken';
                // }

                if (empty($data['CIN_err']) && empty($data['name_err']) && empty($data['email_err']) &&
                    empty($data['tele_err']) && empty($data['adresse_err'])&&empty($data['password_err']) ){
                    // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);


                    $dt = $this->modelInstance->register('client',['CIN_client','nom_prenom','email','telephone','adresse','mot_de_pass'],[$data['CIN'],$data['name'],$data['email'],$data['tele'],$data['adresse'],
                    $data['password']]);
                    if ($dt)
                        {
                        $this->redirect(URLROOT.'/Users/login');

                    } else {die("something went wrong!!");}

                } else {
                    //user register faild
                    $this->loadView('Users'.DS.'register', $data);
                }
            }else {

                $data = [
                    'CIN'=> '',
                    'name' => '',
                    'email' => '',
                    'tele' => '',
                    'adresse'=> '',
                    'password' => '',

                    'CIN_err' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'tele_err' => '',
                    'adresse_err' => '',
                    'password_err' => '',
                ];

                //load the register
                $this->loadView('users'.DS.'singin.user',$data);
            }
        }









        public function login(){

            if (($_SERVER['REQUEST_METHOD'] == 'POST') ){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_err' => '',
                'password_err' => ''
            ];

            if (empty($data['email'])){$data['email_err'] = 'Please fill your email';}
             if(empty($data['password'])){$data['password_err'] = 'Please fill your password';}
             if (empty($data['email']) && empty($data['password'])){$data['eamil_err'] = 'Please fill your eamil and password';
                $data['password_err'] = 'Please fill your eamil and password'; }


             if (empty($data['email_err']) && empty($data['password_err'])) {
                // $info = $this->modelInstance->defineUser($_POST['email']);
                    // if($info != false){
                        $dt = $this->modelInstance->loginUser($data['email'],$data['password']);
                        $this->loadView('test2',$dt);
                       if ($dt) {
                           $_SESSION['email'] =$data['email'] ;
                           $_SESSION['user_id'] = $dt['id_client'];
                           $this->redirect(URLROOT.'/Immobiliers/getAllImmob');
                       } else {
                           //password incorrect
                           $data['email_err'] = 'password or email incorrect';
                           $data['password_err'] = 'password or email incorrect';
                           $this->loadView('users'.DS.'login_user',$data);
                       }
                    // } else{
                    //     $this->loadView('users'.DS.'login_user',$data);
                    // }

                    }else{
                        $this->loadView('users'.DS.'login_user',$data);
                    }
        }else{
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];

            $this->loadView('users'.DS.'login_user',$data);
        }
    }
    }
