<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Icecream;

class IcecreamTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

  

    public function testFromString()
    {
        $IcecreamFromDB = Icecream::all()->first();

        

        $this->assertInstanceOf(Icecream::class, $IcecreamFromDB);

        $this->assertSame("Test", $IcecreamFromDB->name);
    }
}
