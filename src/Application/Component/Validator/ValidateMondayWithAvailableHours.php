<?php

namespace Meals\Application\Component\Validator;

use Meals\Application\Component\Validator\Exception\InvalidDayOrTimeException;

class ValidateMondayWithAvailableHours
{
    public function validate()
    {
        $currentTime = date("H:i");
        if ((date("l") == "Monday") and ($currentTime > "06:00" and $currentTime < "22:00")) ;
        else
            throw  new InvalidDayOrTimeException();
    }
}