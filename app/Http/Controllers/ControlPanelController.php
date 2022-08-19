<?php

namespace App\Http\Controllers;

use App\Models\Grouping;
use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function index()
    {
        return view('control-panel', [
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
}
