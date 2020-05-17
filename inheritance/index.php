<?php

class CoffeeMaker

{
    public function brew()
    {
        var_dump('Brewing a Coffee');
    }
}


//'is a' relationship with the CoffeeMaker
class SpecialityCoffeeMaker extends CoffeeMaker

{
    public function latte()
    {
        var_dump('Brewing a Latte');
    }
}

(new SpecialityCoffeeMaker())->latte();