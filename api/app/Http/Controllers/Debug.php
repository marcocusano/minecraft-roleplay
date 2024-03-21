<?php

namespace App\Http\Controllers;

use App\Enums\EntityType;
use App\Http\Controllers\Enums;

use Illuminate\Routing\Controller;

class Debug extends Controller {

    public function delete() { return response()->json(['method' => 'DELETE']); }
    public function get() { return response()->json(['method' => 'GET']); }
    public function patch() { return response()->json(['method' => 'PATCH']); }
    public function post() { return response()->json(['method' => 'POST']); }

}