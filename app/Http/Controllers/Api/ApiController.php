<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grouping;

class ApiController extends Controller
{
    public function getGroupings()
    {
        $groupings = Grouping::all();
        return response()->json($groupings);
    }
}
