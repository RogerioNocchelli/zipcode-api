<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Laravel\Lumen\Routing\Controller as BaseController;
use Throwable;

class Controller extends BaseController
{
    public function getAll() 
    {
        try {
            $all = Zipcode::all();
            return response()->json($all); 
        } catch (Throwable $t) {
            var_dump($t->getMessage());
            exit;
        }
             
    }
}
