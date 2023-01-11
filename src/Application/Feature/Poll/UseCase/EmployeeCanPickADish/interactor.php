<?php

namespace Meals\Application\Feature\Poll\UseCase\EmployeeCanPickADish;

use Meals\Application\Component\Provider\PollResultProviderInterface;
use Meals\Application\Component\Validator\ValidateMondayWithAvailableHours;

class interactor
{

    /** @var PollResultProviderInterface */


    protected $validateMondayWithAvailableHours;
    public function __construct(
        ValidateMondayWithAvailableHours $validateMondayWithAvailableHours
    )
    {
        $this->validateMondayWithAvailableHours = $validateMondayWithAvailableHours;
    }

    public function checkCorrectDayAndTime()
    {
        $this->validateMondayWithAvailableHours->validate();
    }


}