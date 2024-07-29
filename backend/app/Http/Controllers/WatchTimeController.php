<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchTimeController extends Controller {
    public function store(Request $request) {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'class_id' => 'required|integer',
            'watch_time' => 'required|integer'
        ]);

        DB::table('watchtimes')->insert($validated);

        return response()->json(['message' => 'Watch time recorded successfully'], 201);
    }
}
