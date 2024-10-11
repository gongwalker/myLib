<?php

use PHPUnit\Framework\TestCase;
use YourNamespace\MyLibrary;

class MyLibraryTest extends TestCase
{
    public function testAdd()
    {
        $lib = new MyLibrary();
        $this->assertEquals(4, $lib->add(2, 2));
    }
}