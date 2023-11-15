<?php

// buat kelas manager dengan properti nama dan function sayHello
class Manager
{
    var string $nama;
    
    function sayHello(string $name)
    {
        echo "Hallo $name, nama saya adalah {$this->nama}" . PHP_EOL;
    }
}

// buat kelas VicePresident dengan extends manager
class VicePresident extends Manager
{
    var string $alamat;
    
}
