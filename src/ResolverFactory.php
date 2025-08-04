<?php

declare(strict_types=1);

namespace Artemind\CreditCalculator;

use Artemind\CreditCalculator\Enums\CalculationType;
use Artemind\CreditCalculator\Exceptions\CalculationTypeIsNotImplementedException;
use Artemind\CreditCalculator\Resolvers\AbstractResolver;
use Artemind\CreditCalculator\Resolvers\AnnuityResolver;
use Artemind\CreditCalculator\Resolvers\BulletResolver;
use Artemind\CreditCalculator\Resolvers\DifferentiatedResolver;

class ResolverFactory
{
    public static function createResolver(CalculationType $calculationType): AbstractResolver
    {
        return match ($calculationType) {
            CalculationType::differentiated => new DifferentiatedResolver(),
            CalculationType::annuity => new AnnuityResolver(),
            CalculationType::bullet => new BulletResolver(),
            default => throw new CalculationTypeIsNotImplementedException(),
        };
    }
}
