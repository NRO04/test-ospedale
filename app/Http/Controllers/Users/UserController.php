<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{


    function index()
    {
        try {
            return Users::all();
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

}
