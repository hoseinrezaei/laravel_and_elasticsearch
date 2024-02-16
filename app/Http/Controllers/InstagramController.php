<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function store(Request $request){
        // validation check
        $validation = true;

        if ($validation)
        {
            $instagram = Instagram::create([
                'date' => '1402/01/10',
                'post_type' => 'slide',
                'source_username' => 'snapp_official',
                'text' => 'قرعه کشی برندگان آیفون 12 پرو',
                'link' => 'https://www.instagram.com/snapp_official'
            ]);
            $data = [
                'message' => 'News create successful',
                'id' => $instagram->id
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
