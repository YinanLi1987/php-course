<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way.
   OOP consists of classes that can hold "properties" and "methods". 
   Objects can be created from classes.
*/
class User{
    //properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;
    // a constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
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
};
//instatiate a user object
$user1= new User('brad','brad@example.com','password');
$user2= new User('jhon','jhon@example.com','password');
$user3= new User('kelly','kelly@example.com','password');


//inheritence
class Employee extends User{
    public function __construct($name,$email,$password,$title){
     parent::__construct($name,$email,$password);  
     $this->title = $title;
    }
    public function get_title(){
        return $this -> title;
    }
}
$employee1=new Employee('Sara','sara@example.com','password','manager');
echo $employee1->get_title();