<?php

namespace App\Enums;

class CompanyJobApplicantType {

    public const ACCEPTED = 'accepted';
    public const DENIED = 'denied';
    public const UNDER_REVIEW = 'review';

    public static function cases() {
        return [
            self::ACCEPTED,
            self::DENIED,
            self::UNDER_REVIEW
        ];
    }

}