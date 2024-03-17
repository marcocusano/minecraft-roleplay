<?php

namespace App\Enums;

class CompanyJobType {

    public const ACTIVE = 'active';
    public const CANCELLED = 'cancelled';
    public const EXPIRED = 'expired';

    public static function cases() {
        return [
            self::ACTIVE,
            self::CANCELLED,
            self::EXPIRED
        ];
    }

}