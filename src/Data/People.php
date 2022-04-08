<?php

//aturan :
//ketika menambahkan file yang berisi class maka nama class harus sama dengan nama filenya jika berbeda maka akan error
//tambahkan pula namespacenya

namespace ProgrammerZamanNow\Data;
class People {

    public function __construct(public string $name) {
    }
    
    public function sayHello(string $name) : string {

        return "Hello $name!, My name is {$this->name}" . PHP_EOL ;
    }    
}