<?php

namespace Tests\Strategy;

use App\Factory\Factories\ChicagoPizzaFactory;
use App\Factory\Factories\NYPizzaFactory;
use App\Factory\Pizzas\CheesePizza;
use App\Factory\Pizzas\VeggiePizza;
use App\Factory\OldPizzaStore;
use App\Factory\Factories\SimplePizzaFactory;
use PHPUnit\Framework\TestCase;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function check_CheesePizza()
    {
        $factory = new SimplePizzaFactory();
        $shop = new OldPizzaStore($factory);

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $shop->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /** @test */
    public function check_VeggiePizza()
    {
        $factory = new SimplePizzaFactory();
        $shop = new OldPizzaStore($factory);

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $shop->orderPizza('veggie');

        $this->assertInstanceOf(VeggiePizza::class, $pizza);
    }

    /** @test */
    public function use_ChicagoFactory_for_CheesePizza()
    {
        $factory = new ChicagoPizzaFactory();

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $factory->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /** @test */
    public function use_ChicagoFactory_for_CheesePizza1()
    {
        $nyFactory = new NYPizzaFactory();

        $this->expectOutputString('prepare' . PHP_EOL . 'bake' . PHP_EOL . 'cut' . PHP_EOL . 'box' . PHP_EOL);
        $pizza = $nyFactory->orderPizza('veggie');

        $this->assertInstanceOf(VeggiePizza::class, $pizza);
    }
}
