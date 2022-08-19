<?php

namespace App\Http\Controllers;

use App\Models\Grouping;
use App\Models\TickerLine;
use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function index()
    {
        return view('control-panel', [
            'lines' => TickerLine::all()->pluck('content')->implode(','),
            'groupings' => Grouping::all()
        ]);
    }

    public function updateGrouping(Request $request, Grouping $grouping)
    {
        $data = $request->validate([
            'seats' => 'required|numeric',
            'votes' => 'required|numeric',
            'vote_share' => 'required|numeric'
        ]);

        $grouping->update($data);

        return redirect()->to('/');
    }

    public function updateTickerLines(Request $request)
    {
        if ($line = TickerLine::whereId(1)->first()) {
            $line->content = $request->get('lines');
            $line->save();
        } else {
            TickerLine::create(['content' => $request->get('lines')]);
        }

        return redirect()->to('/');

    }
}
