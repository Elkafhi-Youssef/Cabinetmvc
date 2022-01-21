<?php



class Test extends Controller{

        public function __construct(){
            // load & instantiate students model
            $this->setModelInstance('immobilier');
        }


    



        public function addImmobilier()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'type_immobilier'=> $_POST['type_immobilier'],
                    'type_operation' => $_POST['type_operation'],
                    'adresse' => $_POST['adresse'],
                    'descreption' => $_POST['descreption'],
                    'adresse'=> $_POST['adresse'],
                    'surface' => $_POST['surface'],
                    'prix' => $_POST['prix']
                   
                ];

                // images
               
	// Looping all files

     $countfiles = count($_FILES['img']['tmp_name']);
                for($i=0;$i<$countfiles;$i++){
                $filename[] = $_FILES['img']['tmp_name'][$i];
                print_r($filename) ;
                }
                
                $images=implode(" ",$filename);
                
                // Upload file
                for($i=0;$i<$countfiles;$i++){
                      
                move_uploaded_file($_FILES['img']['tmp_name'][$i],URLROOT.'/'.'upload/' .$filename[$i]);
                
                }
                   // $query="insert into test (car_name,images) values('$name',' $images')";
                //$fire=mysqli_query($con,$query); 
                // images

                echo  $_POST['type_immobilier'].$_POST['type_operation'].$_POST['adresse'].$_POST['descreption'].$_POST['adresse'],$_POST['surface'].$_POST['prix'];

                // if (empty($data['CIN'])) $data['CIN_err'] = 'Please fill your CIN';
                // if (empty($data['name'])) $data['name_err'] = 'Please fill your name';
                // if (empty($data['email'])) $data['email_err'] = 'Please fill your email';
                // if (empty($data['tele'])) $data['tele_err'] = 'Please fill your telehone';
                // if (empty($data['adresse'])) $data['adresse_err'] = 'Please fill your adresse';               
                // if (empty($data['password'])) $data['password_err'] = 'Please fill your password';
               
    
                if (1==1 ){
                    // $dt = $this->modelInstance->register('client',['CIN_client','nom_prenom','email','telephone','adresse','mot_de_pass'],[$data['CIN'],$data['name'],$data['email'],$data['tele'],$data['adresse'],
                    // $data['password']]);
                    // if ($dt)
                    //     {
                    //     $this->redirect(URLROOT.'/Users/login'); 
                        
                    // } else {die("something went wrong!!");}
                        echo 'i m here';
                } else {
                    //user register faild
                    $this->loadView('admin'.DS.'immobilier'.DS.'addimmobilier',[]);
                }
            }else {
    
                $data = [
                    'type_immobilier'=> '',
                    'type_operation' => '',
                    'adresse' => '',
                    'descreption' => '',
                    'adresse'=> '',
                    'surface' => '',
                    'prix' => ''
                ];
    
                //load the register
                $this->loadView('admin'.DS.'immobilier'.DS.'addimmobilier',$data);
            }
        }




    }