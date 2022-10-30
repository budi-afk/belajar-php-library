<?php

namespace Budiman\BelajarPhpLibrary;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello $name, nama saya $this->name";
    }
}
