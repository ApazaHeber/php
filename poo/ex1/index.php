<?php

require_once('class/Person.php');

// instanciamos un nuevo objeto
$person1 = new Person;

//add data to the object
$person1->name = 'pedro';
$person1->lastname = 'perez';
$person1->age = 22;


$person2 = new Person;

$person2->setName('ALICIA');
$person2->lastname = 'quispe';
$person2->age = 20;

echo "name of first person is : " . $person1->getName();
echo '<br>';
echo "name of second person is : " . $person2->getName();




?>

