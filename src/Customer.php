<?php 
namespace Budiman\BelajarPhpLibrary;

class Customer {
    public function __construct(private string $name) {}

    public function sayHello(string $name): string {
        return "Hello $name, nama saya $this->name";
    }
}
