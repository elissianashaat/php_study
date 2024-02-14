<?php

class user{
    public $name;
    public $email;
    public $password;

    //constructor
    public function __construct($name, $email, $password){ 
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    //method is a function that belongs to a class
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

//instantiate a user object 
$user1 = new user();
$user1->set_name('brad');
var_dump($user1);

class employee extends user{
    public $title;    
    public function __construct($name, $email, $password, $title){
     parent::__construct($name, $email, $password);
     $this -> title = $title; 
    }
    public function get_title(){
        return $this -> title;
    }
}

$employee1 = new employee('elissia','elissia@gmail.com','123','manager');

echo $employee1->get_title();

?>