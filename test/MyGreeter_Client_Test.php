<?php
use MyGreeter\Client;
use PHPUnit\Framework\TestCase;


class MyGreeter_Client_Test extends TestCase
{

    public function setUp():void
    {
        $this->greeter = new Client();

    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        echo($this->greeter->getGreeting());

        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );

    }
}


