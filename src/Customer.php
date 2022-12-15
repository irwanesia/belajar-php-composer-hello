<?php

namespace Codeir\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $names)
    {
        return "hello $names, my name is $this->name";
    }
}