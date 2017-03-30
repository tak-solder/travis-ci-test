<?php

namespace Sample;

class Hoge
{
    public function hello($name = null)
    {
        if (!$name) {
            $name = 'world';
        }

        return "hello {$name}";
    }
}