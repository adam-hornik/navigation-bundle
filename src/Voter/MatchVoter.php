<?php

declare(strict_types=1);

namespace Everlution\NavigationBundle\Voter;

use Everlution\Navigation\Voter\Matchable;

/**
 * Class UriVoter.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
interface MatchVoter
{
    /**
     * @param Matchable $item
     * @return bool
     */
    public function match(Matchable $item): bool;
}
