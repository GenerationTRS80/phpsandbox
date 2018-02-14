<?php

# Create a class
# Create properties for the class

  class Person {

    # if you set property to private. You can not directly access it.
      private $name;
      private $email;

    # Create a Constructor. A constructor is s method that runs when the object is created.
    # Note: You can pass objects variables into the constructor

    # Construct class
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

    # Create methods Get and Set
    # Note: 2 types of methods getter and setters
      
      # Set/Get Name
      public function setName($name){
        $this->name= $name;
      }

      public function getName(){
        return $this->name.'<br>';
      }

      #Get/
      public function setEmail($email){
        $this->email= $email;
      }

      #Set
      public function getEmail(){
        return $this->email.'<br>';
      }
  }

  // # Instantiate the person object
  //   $person1 = new Person('John Doe','jdoe@gmail.com');

  // # Get Name
  // echo $person1->getName();


# >>>   Inheritance   <<<

  class Customer extends Person{
    private $balance;

    # Create constructor 
      public function __construct($name,$email,$balance){

        #Call parent constructor
        parent:: __construct($name,$email,$balance);
        $this->balance= $balance;

        echo 'A new '.__CLASS__.' has been created<br>';

      }

      #Set
      public function setBalance($balance){
        $this->balance= $balance;
      }

      #Get     
      public function getBalance(){
        return $this->balance;
      }
    
  }

  $customer1 = new Customer('John Doe','jd@doe.com','300');

  echo $customer1->getBalance();
?>