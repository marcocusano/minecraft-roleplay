<?php

namespace App\Enums;

class TransactionType {

    public const ATM = 'ATM';
    public const CASH = 'CASH';
    public const CHECK = 'CHECK';
    public const DEPOSIT = 'DEPOSIT';
    public const RECEIPT = 'RECEIPT';
    public const TRANSFER = 'TRANSFER';

    public static function cases() {
        return [
            self::ATM,
            self::CASH,
            self::CHECK,
            self::DEPOSIT,
            self::RECEIPT,
            self::TRANSFER
        ];
    }

}