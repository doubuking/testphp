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
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );

    }

    public function test_ExpectHelloActualHello()
    {


        $time = date("H");
        if ($time >= 0 && $time < 12){
            $this->expectOutputString("Good morning");

        }elseif ($time >= 12 && $time < 18){
            $this->expectOutputString("Good afternoon");

        }else{
            $this->expectOutputString("Good evening");

        }
        print $this->greeter->getGreeting();


    }

    public function tearDown(): void
    {
        unset($this->greeter);
    }
}


