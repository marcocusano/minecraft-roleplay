<?php

namespace App\Enums;

Enum TransactionType {
    case ATM;
    case CASH;
    case CHECK;
    case DEPOSIT;
    case RECEIPT;
    case TRANSFER;
}

Const TransactionTypes = ['ATM', 'CASH', 'CHECK', 'DEPOSIT', 'RECEIPT', 'TRANSFER'];