<?php

namespace Tests;

use App\Strategy\Realisations\DecoyDuck;
use App\Strategy\Realisations\MallardDuck;
use App\Strategy\Realisations\ModelDuck;
use App\Strategy\Realisations\RedheadDuck;
use App\Strategy\Realisations\RubberDuck;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function check_DecoyDuck()
    {
        $duck = new DecoyDuck();

        $this->assertEquals("I can't fly", $duck->performFly());
        $this->assertEquals("Squeak", $duck->performQuack());
        $this->assertEquals("I'm a decoy duck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /** @test */
    public function check_MallardDuck()
    {
        $duck = new MallardDuck();

        $this->assertEquals("I'm flying!!!", $duck->performFly());
        $this->assertEquals("Quack", $duck->performQuack());
        $this->assertEquals("I'm a real MallardDuck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /** @test */
    public function check_ModelDuck()
    {
        $duck = new ModelDuck();

        $this->assertEquals("I can't fly", $duck->performFly());
        $this->assertEquals("Quack", $duck->performQuack());
        $this->assertEquals("I'm a real ModelDuck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /** @test */
    public function check_RedheadDuck()
    {
        $duck = new RedheadDuck();

        $this->assertEquals("I'm flying!!!", $duck->performFly());
        $this->assertEquals("Quack", $duck->performQuack());
        $this->assertEquals("I'm a real RedheadDuck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /** @test */
    public function check_RubberDuck()
    {
        $duck = new RubberDuck();

        $this->assertEquals("I can't fly", $duck->performFly());
        $this->assertEquals("Squeak", $duck->performQuack());
        $this->assertEquals("I'm not a real duck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }
}
