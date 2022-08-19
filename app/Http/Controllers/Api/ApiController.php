<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grouping;
use App\Models\TickerLine;

class ApiController extends Controller
{
    public function getGroupings()
    {
        $groupings = Grouping::all();
        return response()->json($groupings);
    }

    public function getTickerLines()
    {
        $tickerLines = TickerLine::whereId(1)->first()->content;
        return $tickerLines;
    }
}
