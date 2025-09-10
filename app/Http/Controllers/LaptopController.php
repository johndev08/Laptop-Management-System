<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptop = laptop::all();
        return view('laptop.index', compact('laptop'));
    }

    public function create()
    {
        return view('laptop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'laptopname' => 'required',
            'processor' => 'required',
            'storage' => 'required',
            'operatingsystem' => 'required',
        ]);

        laptop::create($request->all());
        return redirect()->route('laptop.index');
    }

    public function show($id)
    {
        $laptop = laptop::findorFail($id);
        return view('laptop.show', compact('laptop'));
    }

    public function edit($id)
    {
        $laptop = laptop::findorFail($id);
        return view('laptop.edit', compact('laptop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'laptopname' => 'required',
            'processor' => 'required',
            'storage' => 'required',
            'operatingsystem' => 'required',
        ]);

        $laptop = laptop::findorFail($id);
        $laptop->update($request->all());
        return redirect()->route('laptop.index');
        
    }

    public function destroy($id)
    {
        $laptop = laptop::findorFail($id);
        $laptop->delete();
        return redirect()->route('laptop.index');
    }
}
