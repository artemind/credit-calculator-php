<?php

declare(strict_types=1);

use Artemind\CreditCalculator\Enums\CalculationType;
use Artemind\CreditCalculator\ResolverFactory;
use Artemind\CreditCalculator\Resolvers\AnnuityResolver;
use Artemind\CreditCalculator\Resolvers\BulletResolver;
use Artemind\CreditCalculator\Resolvers\DifferentiatedResolver;

it('can create annuity resolver', function () {
    $resolver = ResolverFactory::createResolver(CalculationType::annuity);
    expect($resolver)->toBeInstanceOf(AnnuityResolver::class);
});

it('can create differentiated resolver', function () {
    $resolver = ResolverFactory::createResolver(CalculationType::differentiated);
    expect($resolver)->toBeInstanceOf(DifferentiatedResolver::class);
});

it('can create bullet resolver', function () {
    $resolver = ResolverFactory::createResolver(CalculationType::bullet);
    expect($resolver)->toBeInstanceOf(BulletResolver::class);
});
