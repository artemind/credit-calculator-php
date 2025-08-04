<?php

declare(strict_types=1);

namespace Artemind\CreditCalculator\DTO;

use Artemind\CreditCalculator\DTO\Validators\Min;
use Spatie\DataTransferObject\Attributes\MapTo;
use Spatie\DataTransferObject\DataTransferObject;

class PaymentScheduleItemDto extends DataTransferObject
{
    #[Min(1)]
    public int $month;

    #[MapTo('principal_payment')]
    public float $principalPayment;

    #[MapTo('interest_payment')]
    public float $interestPayment;

    #[MapTo('total_payment')]
    public float $totalPayment;

    #[MapTo('remaining_principal')]
    public float $remainingPrincipal;
}
