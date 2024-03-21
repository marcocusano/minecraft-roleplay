<?php

namespace App\Enums;

class CompanyJobApplicantType {

    public const ACCEPTED = 'accepted';
    public const DECLINED = 'declined';
    public const UNDER_REVIEW = 'review';

    public static function cases() {
        return [
            self::ACCEPTED,
            self::DECLINED,
            self::UNDER_REVIEW
        ];
    }

}