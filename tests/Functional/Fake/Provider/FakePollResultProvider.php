<?php

namespace tests\Meals\Functional\Fake\Provider;

use Meals\Application\Component\Provider\PollResultProviderInterface;
use Meals\Domain\Poll\Poll;
use Meals\Domain\Poll\PollResult;
use Meals\Domain\Poll\PollResultList;

class FakePollResultProvider implements PollResultProviderInterface
{
    /** @var PollResult   */
    protected $pollResult;

    protected $pollResults;

    public function getPollResult(): PollResult
    {
        return $this->pollResult;
    }


    public function getPollResults(Poll $poll):PollResultList
    {
        $pollres = [];
        foreach ($this->pollResults as $pollResult) {
            if ($pollResult->getPoll()->getId == $poll->getId())
                $pollres[] = $pollResult;
        }
        return $pollres;
    }

    public function setPollResult(PollResult $pollResult)
    {
        $this->pollResult = $pollResult;
    }

    public function addPollResult(PollResult $pollResult)
    {
        $this->pollResults[] = new $pollResult;
    }
}