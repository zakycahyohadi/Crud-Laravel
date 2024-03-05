<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    
        public function index()
        {
            $warga = Warga::all();
            return view('table',compact(['warga']));
        }

        // Create
        public function create()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        $warga = Warga::create($request -> except(['_token']));
    
        return redirect('table');
    }
    
    // Edit
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view ('update.edit',compact(['warga']));

       
    
    }


    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga -> update($request->all());
        return redirect('table');
    }

    // Delete
    public function destroy($id)
    {
        $warga=Warga::find($id);
        $warga -> delete();
        return redirect('table');
    }
    
}
