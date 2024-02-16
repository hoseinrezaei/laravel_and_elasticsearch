<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    public function store(Request $request){

        // check validations
        $validation = true;

        $userAlarmCount = Alarm::where('user_id', $request->user_id)->count();

        if ($validation == true && $userAlarmCount < 10){
            $alarm = new Alarm();
            $alarm->user_id = $request->user_id;
            // platform example "news", "instagram", "twitter", etc.
            $alarm->platform = $request->platform;
            $alarm->source = $request->source;
            $alarm->save();

            $data = [
                'message' => 'alarm create successful',
                'id' => $alarm->id
            ];

            return response()->json($data, 200);
        }

        $data = [
            'message' => 'Error! bad request',
            'id' => null
        ];

        return response()->json($data, 400);

    }
}
