<?php

namespace Tests\Strategy;

use App\Factory\Pizzas\CheesePizza;
use App\Factory\Pizzas\VeggiePizza;
use App\Factory\PizzaStore;
use App\Factory\SimplePizzaFactory;
use PHPUnit\Framework\TestCase;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function check_CheesePizza()
    {
        $factory = new SimplePizzaFactory();
        $shop = new PizzaStore($factory);

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $shop->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /** @test */
    public function check_VeggiePizza()
    {
        $factory = new SimplePizzaFactory();
        $shop = new PizzaStore($factory);

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $shop->orderPizza('veggie');

        $this->assertInstanceOf(VeggiePizza::class, $pizza);
    }
}
