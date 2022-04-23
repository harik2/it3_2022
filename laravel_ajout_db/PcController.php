<?php

namespace App\Http\Controllers;

use App\Models\Pc;
use Illuminate\Http\Request;

class PcController extends Controller
{
    public function create()
    {
    return view('pcs/form');
    }
    public function store(Request $request)
    {
        Pc::create($request->all());
        return redirect()->route('pcs.create')->with('notice','ajout ok');
    }

}
