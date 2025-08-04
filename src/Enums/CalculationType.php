<?php

declare(strict_types=1);

namespace Artemind\CreditCalculator\Enums;

enum CalculationType
{
    case differentiated;

    case annuity;

    case bullet;
}
