<?php

namespace App\Http\Controllers;

use App\Models\Civilian;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CivilianController extends Controller
{
    // Show all civilians
    public function index() {
        return view('civilians.index', [
            'civilians' => Civilian::latest()->filter
            (request(['search']))->paginate(6)
        ]);
    }

    // Show single civilian
    public function show(Civilian $civilian) {
        return view('civilians.show', [
            'civilian' => $civilian
        ]);
    }

    // Show create form
    public function create() {
        return view('civilians.create');
    }

    // Show store form
    public function store(Request $request) {
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'fingerprint' => '',
            'dna' => '',
        ]);

        if($request->hasFile('mugshot')) {
            $formFields['mugshot'] = $request->file('mugshot')->store('mushots', 'public');
        }

        Civilian::create($formFields);

        return redirect('/')->with('message', 'Civilian created...');
    }

    public function edit(Civilian $civilian) {
        return view('civilians.edit', ['civilian' => $civilian]);
    }
    
    public function destroy(Civilian $civilian) {
        $civilian->delete();
        return redirect('/')->with('message', 'Civilian deleted...');
    }
    
    public function update(Request $request, Civilian $civilian) {
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'fingerprint' => '',
            'dna' => '',
        ]);

        if($request->hasFile('mugshot')) {
            $formFields['mugshot'] = $request->file('mugshot')->store('mushots', 'public');
        }

        $civilian->update($formFields);

        return back()->with('message', 'Civilian edited...');
    }
}
