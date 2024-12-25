<?php

namespace AbdullahMuchsin\Data;

class Muchsin
{

    public function __construct(private string $name) {}

    public function sayHello(string $name): string
    {
        return "Hai, $name My name is $this->name";
    }
}
