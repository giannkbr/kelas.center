<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EarningsController extends Controller {
    public function calculate($userId) {
        $subscription = DB::table('subscriptions')->where('user_id', $userId)->first();
        $netAmount = $subscription->amount * 0.8 / 2;

        $watchTimes = DB::table('watchtimes')
            ->where('user_id', $userId)
            ->get();

        $totalWatchTime = $watchTimes->sum('watch_time');

        $earnings = [];
        foreach ($watchTimes as $watchTime) {
            $percentage = $watchTime->watch_time / $totalWatchTime;
            $earning = $netAmount * $percentage;

            $class = DB::table('kelas')->where('id', $watchTime->class_id)->first();
            $mentor = DB::table('mentors')->where('id', $class->mentors_id)->first();

            if (!isset($earnings[$mentor->id])) {
                $earnings[$mentor->id] = [
                    'mentor' => $mentor->name,
                    'total_earning' => 0
                ];
            }
            $earnings[$mentor->id]['total_earning'] += $earning;
        }

        return response()->json($earnings);
    }


}
