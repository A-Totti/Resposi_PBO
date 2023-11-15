<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Karimuddin Pratama");
var_dump($company);

$company->programmer = new BackendProgrammer("Karimuddin Pratama");
var_dump($company);

$company->programmer = new FrontendProgrammer("Karimuddin Pratama");
var_dump($company);

sayHelloProgrammer(new Programmer("Karimuddin Pratama"));
sayHelloProgrammer(new BackendProgrammer("Karimuddin Pratama"));
sayHelloProgrammer(new FrontendProgrammer("Karimuddin Pratama"));