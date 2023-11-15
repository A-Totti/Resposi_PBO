<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new manager();
$manager->nama = "Karim,";
$manager->sayHello("Hasibuan");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$VicePresident = new VicePresident();
$VicePresident->nama = "Hasibuan";
$VicePresident->alamat = "Kandis";
$VicePresident->sayHello("Sulaeman");
