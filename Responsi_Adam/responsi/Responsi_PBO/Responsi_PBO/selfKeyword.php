<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Karim","Kandang Mas");

// panggil function
$person1->sayHello("Karim");

// panggil self keyword
$person1->info() . PHP_EOL;