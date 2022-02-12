<?php

use PHPUnit\Framework\TestCase;
use Example\Example;

class HelloTest extends TestCase {

     public function testSayHello() {
        $this->assertSame( Example::sayHello("world"), "Hello, world");
    }
}
