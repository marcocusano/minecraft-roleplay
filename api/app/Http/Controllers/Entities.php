<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Enums\EntityType;

use Illuminate\Routing\Controller;

class Entities extends Controller {

    public static function types() { return EntityType::class; }

    public static function get(EntityType $entityType, $entityId):User|Company|array {
        switch ($entityType) {
            case EntityType::CITIZEN:
                return Entities::getUser($entityId);
            case EntityType::COMPANY:
                return Entities::getCompany($entityId);
            default:
                return [];
        }
    }

    public static function getUser($id):User {
        return User::findOrFail($id);
    }

    public static function getCompany($id):Company {
        return Company::findOrFail($id);
    }

    public static function stringToType(string $searchString):EntityType {
        switch ($searchString) {
            case EntityType::CITIZEN->name === $searchString:
                return EntityType::CITIZEN;
                break;
            case EntityType::COMPANY->name === $searchString:
                return EntityType::COMPANY;
                break;
            case EntityType::SERVER->name === $searchString:
            default:
                return EntityType::SERVER;
                break;
        }
    }

}