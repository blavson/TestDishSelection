<?php

namespace Meals\Application\Component\Provider;

use Meals\Domain\Poll\Poll;
use Meals\Domain\Poll\PollResult;
use Meals\Domain\Poll\PollResultList;

interface PollResultProviderInterface
{
    public function getPollResults(Poll $poll) : PollResultList;
    public function addPollResult(PollResult  $pollResult);
}