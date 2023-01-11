<?php

namespace tests\Meals\Unit\Application\Component\Validator;

use Meals\Domain\Employee\Employee;
use tests\Meals\Functional\FunctionalTestCase;

class EmployeeCanPickADishValidatorTest extends TestCase
{
    public function testSuccessful(Employee $employee)
    {
        $employee = $this->prohesize(Employee::class);
    }
}