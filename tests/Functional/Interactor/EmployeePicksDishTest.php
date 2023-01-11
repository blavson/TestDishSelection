<?php

namespace tests\Meals\Functional\Interactor;

use Meals\Domain\Dish\Dish;
use Meals\Domain\Poll\PollResult;
use tests\Meals\Functional\FunctionalTestCase;

class EmployeePicksDishTest extends FunctionalTestCase
{
    protected function EmployeePicksDish(Dish $dish) : PollResult
    {
        return new PollResult(1,
            new Poll(1, true,
                new Menu(1, 'New Menu', [
                    new Dish(1, 'Ceasar', 'Ceasar Salad'),
                    new Dish(2, 'Fries', 'French Fries')
                ]),
                new Employee(
                    1,
                    new User(1, Permission::PARTICIPATION_IN_POLLS),
                    2,
                    'Smith'
                ),
                $dish,
                2
            ));
    }
}