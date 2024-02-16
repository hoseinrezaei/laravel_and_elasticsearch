<?php

namespace App\Http\Controllers;

use App\Models\Twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function store(Request $request){
        // validation check
        $validation = true;

        if ($validation)
        {
            $twitter = Twitter::create([
                'date' => '1402/11/24',
                'source_username' => 'soh3il',
                'text' => 'EP 128 - Alireza Eskandari | از تجربیات قبلی تا استارتاپ جدید
احتمالاً علیرضا اسکندری را از قسمت ۶۴ به خاطر دارین. این قسمت تا به امروز پربازدیدترین قسمت بوده، هر چند دلیل دقیقش را نمیدونم',
                'link' => 'https://twitter.com/soh3il/status/1758484967372345640'
            ]);
            $data = [
                'message' => 'News create successful',
                'id' => $twitter->id
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
