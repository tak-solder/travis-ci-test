<?php

use PHPUnit\Framework\TestCase;
use Sample\Hoge;

class HogeTest extends TestCase
{
    /**
     * @var Hoge
     */
    private $hoge;

    protected function setUp()
    {
        parent::setUp();
        $this->hoge = new Hoge();
    }

    public function testHasNameTravis()
    {
        $this->assertEquals('hello travis', $this->hoge->hello('travis'));
    }

    public function testAnonymous()
    {
        $this->assertEquals('hello world', $this->hoge->hello());
    }
}