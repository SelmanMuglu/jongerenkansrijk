<?php

namespace App\Http\Controllers;
use App\Activity;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ActivityController extends Controller
{
    public function index()
    {
      $activiteiten = Activity::all();

      return view('activiteiten.index', ['activiteiten' => $activiteiten]);
    }

    public function create()
    {
        return view('activiteiten.create');
    }

    public function store(Activity $activiteit)
    {
        request()->validate([
            'activity' => 'required',
        ]);

        $activiteit->activity = request('activity');
        $activiteit->save();
        return redirect()->route('activiteiten.index');
    }

    public function edit(Activity $activiteiten)
    {
        return view('activiteiten.edit',['activiteiten' => $activiteiten]);
    }

    public function update($id)
    {
        $activiteit = Activity::find($id);
        $activiteit->activity = request('activity');
        $activiteit->save();
        return redirect()->route('activiteiten.index');
    }

    public function destroy($activiteitId)
    {
        Activity::destroy($activiteitId);
        return redirect('activiteiten');

    }
}
