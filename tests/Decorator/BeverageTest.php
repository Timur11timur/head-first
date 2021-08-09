<?php

namespace Tests\Strategy;

use App\Decorator\Beverages\DarkRoast;
use App\Decorator\Beverages\Espresso;
use App\Decorator\Beverages\HouseBlend;
use App\Decorator\Condiments\Mocha;
use App\Decorator\Condiments\Soy;
use App\Decorator\Condiments\Whip;
use PHPUnit\Framework\TestCase;

class BeverageTest extends TestCase
{
    /** @test */
    public function check_Espresso()
    {
        $beverage = new Espresso();

        $this->assertEquals("Espresso", $beverage->getDescription());
        $this->assertEquals(1.99, $beverage->cost());
    }

    /** @test */
    public function check_DarkRoast_with_2_Mocha_and_Whip()
    {
        $beverage = new DarkRoast();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);

        $this->assertEquals("Dark Roast Coffee, Mocha, Mocha, Whip", $beverage->getDescription());
        $this->assertEquals(1.49, $beverage->cost());
    }

    /** @test */
    public function check_King_HouseBlend()
    {
        $beverage = new HouseBlend();
        $beverage = new Soy($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);

        $this->assertEquals("House Blend Coffee, Soy, Mocha, Whip", $beverage->getDescription());
        $this->assertEquals(1.34, $beverage->cost());
    }
}
