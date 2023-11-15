<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$karim = new Person("Karim", "Kandang Mas");

// tambahkan value nama di object
$karim->nama = "Karim";

// panggil function sayHelloNull dengan parameter
$karim->sayHelloNull("Hasibuan");

// buat object dari kelas person
$hasibuan = new Person("Hasibuan", "kandis");

// tambahkan value nama di object
$hasibuan->nama = "Hasibuan";

// panggil function sayHelloNull dengan parameter null
$hasibuan->sayHelloNull(null);
