<?php

class User {
  // properties are attributes that belong to a class
  public $name;
  public $email;
  public $password;

  // constructor is method that runs when object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }


  // Method - function that belongs to class
  function set_name($name) {
    $this->name = $name; 
  }

  function get_name() {
    return $this->name;
  }
}

// New instance of User
$user1 = new User('Ben', 'benbilgili@gmail.com', 'gunners123');
// $user2 = new User();


var_dump($user1);
// echo '<br>';
// var_dump($user2);
// echo '<br>';
// echo $user1->get_name();
// echo '<br>';
// echo $user2->get_name();


// Inheritance

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail', '123', 'manager');

echo $employee1->get_title();