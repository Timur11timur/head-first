<?php

namespace Tests;

use App\Strategy\Realisations\MallardDuck;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function check_MallardDuck()
    {
        $duck = new MallardDuck();

        $this->assertEquals("I'm flying!!!", $duck->performFly());
        $this->assertEquals("Quack", $duck->performQuack());
        $this->assertEquals("I'm a real MallardDuck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }
}
