<?php

//test l'API

use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    public function testSearch()
    {
        $this->assertFileExists('controller/addItem.php');
    }
}