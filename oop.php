<?php

# Create a class
# Create properties for the class

  class Person {

    # if you set property to private. You can not directly access it.
      private $name;
      private $email;

    # Create a Constructor. A constructor is s method that runs when the object is created.
    # Note: You can pass objects variables into the constructor

      public function __construct($name, $email){
        # Note: A space ' ' is required between "function __construct"

        $this->name = $name;
        $this->email = $email;

        #Concatenate the name of the class (returned from __class__) 
        echo __CLASS__.' created<br>';

      }

    # Destroy the class
      public function __destruct(){
        #Concatenate the name of the class (returned from __class__) 
        echo __CLASS__.' destroy<br>';

      }


    # create methods
    # Note: 2 types of methods getter and setters
      public function setName($name){
        $this->name= $name;
      }

      public function getName(){
        return $this->name.'<br>';
      }

    # Get Set email
      public function setEmail($email){
        $this->email= $email;
      }

      public function getEmail(){
        return $this->email.'<br>';
      }
  }

  # Instantiate the person object
    $person1 = new Person('John Doe','jdoe@gmail.com');


  // # Get Name
  // echo $person1->getName();



?>