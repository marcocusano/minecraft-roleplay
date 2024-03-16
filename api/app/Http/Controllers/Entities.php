<?php

namespace App\Http\Controllers;

// Models
use App\Models\User;
use App\Models\Company;
// Enums
use App\Enums\EntityType;
// Resources
use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;

use Illuminate\Routing\Controller;

class Entities extends Controller {

    public static function types() { return EntityType::cases(); }

    public static function get(string $entityType, $entityId):UserResource|CompanyResrouce|array {
        switch ($entityType) {
            case EntityType::CITIZEN:
                return Entities::getUser($entityId);
            case EntityType::COMPANY:
                return Entities::getCompany($entityId);
            default:
                return [];
        }
    }

    public static function getUser($id):UserResource {
        return New UserResource(User::findOrFail($id));
    }

    public static function getCompany($id):CompanyResource {
        return New CompanyResource(Company::findOrFail($id));
    }

}