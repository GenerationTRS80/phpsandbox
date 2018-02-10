<?php

# Create a class
# Create properties for the class

  class Person {

    # if you set property to private. You can not directly access it.
      private $name;
      private $email;

    # create methods
    # Note: 2 types of methods getter and setters
      public function setName($name){
        $this->name= $name;
      }

      public function getName(){
        return $this->name;
      }

    # Get Set email
      public function setEmail($email){
        $this->email= $email;
      }

      public function getEmail(){
        return $this->email;
      }
  }

  # Instantiate the person object
    $person1 = new Person;

  # Set Name
    $person1->setName('John Doe');

  # Get Name
    echo $person1->getName();
?>