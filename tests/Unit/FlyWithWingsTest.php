<?php

namespace Tests\Unit;

use App\Strategy\FlyBehaviors\FlyWithWings;
use PHPUnit\Framework\TestCase;

class FlyWithWingsTest extends TestCase
{
    /** @test */
    public function possible_create_object()
    {
        $obj = new FlyWithWings();

        $this->assertNotNull($obj);
    }

    /** @test */
    public function fly_method_works()
    {
        $obj = new FlyWithWings();

        $this->assertEquals("I'm flying!!!", $obj->fly());
    }
}