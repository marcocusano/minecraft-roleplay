<?php

namespace App\Enums;

class EntityType {

    public const CITIZEN = 'CITIZEN';
    public const COMPANY = 'COMPANY';
    public const SERVER = 'SERVER';

    public static function cases() {
        return [
            self::SERVER,
            self::CITIZEN,
            self::COMPANY
        ];
    }

}

