<?php

namespace App\Http\Controllers;

// Enums
use App\Enums\EntityType;
// Laravel
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
// Models
use App\Models\Review;
// Resources
use App\Http\Resources\ReviewResource;

class Reviews extends Controller {

    ////////////////
    // A.C.R.U.D. //
    ////////////////

    public function all() {
        return ReviewResource::collection(Review::all());
    }

    public function create(\App\Http\Requests\Reviews\CreateRequest $request) {
        $data = $request->validated();
        $review = Review::create($data);
        return new ReviewResource($review);
    }

    public function read($id) {
        $review = Review::findOrFail($id);
        return new ReviewResource($review);
    }

    public function update($id, \App\Http\Requests\Reviews\UpdateRequest $request) {
        $review = Review::findOrFail($id);
        $data = $request->validated();
        $review->update($data);
        return new ReviewResource($review);
    }

    public function delete($id) {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json([], 204);
    }

    ///////////////
    // Relations //
    ///////////////

    public function receiver($id) {
        $review = Review::findOrFail($id);
        if (($review->receiver_type === EntityType::CITIZEN && is_numeriC($review->receiver_id)) || ($review->receciver_type === EntityType::COMPANY && is_numeric($review->receiver_id))) {
            return $review->receiver();
        } else {
            return response()->json([], 200);
        }
    }

    public function sender($id) {
        $review = Review::findOrFail($id);
        if (($review->sender_type === EntityType::CITIZEN && is_numeriC($review->sender_id)) || ($review->sender_type === EntityType::COMPANY && is_numeric($review->sender_id))) {
            return $review->sender();
        } else {
            return response()->json([], 200);
        }
    }

}