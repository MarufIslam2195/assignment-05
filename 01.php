<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <h2>Task 01 >> HTML Basics</h2>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>



<?php
            //Task 02 Basic OOP in PHP
class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}


            // Task 03 Superglobal Variables in PHP

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = $_POST["name"];
  $email = $_POST["email"];

  
  $person = new Person();

  
  $person->setName($name);
  $person->setEmail($email);

  
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
}