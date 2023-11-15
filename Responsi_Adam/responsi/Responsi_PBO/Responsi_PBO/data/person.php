<?php

// membuat kelas person
class Person{
    // membuat properti
    var string $nama;

    // gunakan nullable properti
    var ?string $alamat = null;

    // gunakan default value untuk properti 
    var string $negara = "Indonesia";

    // buat function sayHello
    function sayHello(string $name){
        echo "Hello $name" . PHP_EOL;
    }

    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $name)
    {
        if (is_null($name)) {
            echo "Hallo, {$this->nama}" . PHP_EOL;
        } else {
            echo "Hallo $name, nama saya adalah {$this->nama}" . PHP_EOL;
        }
    }

    // buat const author
    const AUTHOR = "Karimuddin Pratama";

    // buat function info untuk self keyword
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    // buat function constructor
    function __construct(string $nama, ?string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // buat function destructor
    function __destruct()
    {
        echo " $this->nama adalah programmer" . PHP_EOL;
    }
}