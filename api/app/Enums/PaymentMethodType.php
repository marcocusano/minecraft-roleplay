<?php

namespace App\Enums;

class PaymentMethodType {

    public const CARD = 'CARD';
    public const CASH = 'CASH';
    public const PHONE = 'PHONE';

    public static function cases() {
        return [
            self::CARD,
            self::CASH,
            self::PHONE
        ];
    }

}