<?php

namespace App\Http\Controllers;

// Laravel
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
// Models
use App\Models\User;
// Requests
use App\Http\Requests\Login\DiscordRequest;

class Transactions extends Controller {

    public function login(Request $request) {

    }

    public function logout(Request $request) {

    }

    public function discordLogin(DiscordRequest $request) {
        $data = $request->validated();
        $payload = [
            'client_id' => env('DISCORD_CLIENT_ID'),
            'Client_secret' => env('DISCORD_CLIENT_SECRET'),
            'redirect_uri' =>  $data->redirect_uri,
            'scope' => $data->scope ?: 'identify email guilds.join'
        ];
        // Retrieve an Access Token
        $response = Http::POST(env('DISCORD_ENDPOINT') . "/oauth2/token", $payload);
        if ($response->successful()) {
            
        } else {

        }
    }

}