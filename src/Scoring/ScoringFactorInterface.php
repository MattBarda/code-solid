<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoringFactorInterface
{
    /**
     * Return the score that should be added to overall score.
     *
     * This method should not return exception for any normal reason.
     */
    public function score(BigFootSighting $sighting): int;
}
