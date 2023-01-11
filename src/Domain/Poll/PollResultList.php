<?php

namespace Meals\Domain\Poll;

use Assert\Assertion;

class PollResultList
{
    /**
     * @param array $pollResults
     *
     */

    public function __construct(array $pollResults)
    {
//      Assertion::allIsInstanceOf($pollResults, PollResult::class);
        //Should be less than 300
        $this->pollResults = $pollResults;
    }

    public function getPollResults()
    {
        return $this->pollResults;
    }
}