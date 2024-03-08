<?php

namespace App\Enums;

Enum PaymentMethodType {
    case CARD;
    case CASH;
    case PHONE;
}

Const PaymentMethodTypes = ['CARD', 'CASH', 'PHONE'];