<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Throwable;

class Controller extends BaseController
{
    public function getAll() 
    {
        $response = [];

        try {
            $response = Zipcode::all(); 
        } catch (Throwable $t) {
            $response = $t->getMessage(); 
        }
        
        return response()->json($response);
    }

    public function save(Request $resquest)
    {
        try {
            $result = Zipcode::create([
                'city' => $resquest->city,
                'zipcode' => $resquest->zipcode,
            ]);

            return response($result);

        } catch (Throwable $t) {
            return response(['error' => $t->getMessage()], 400);
        }
    }
}
