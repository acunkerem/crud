<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veri;



class VeriController extends Controller
{
    public function index()
    {
        $veriler = Veri::All();
        return view('veriler.index', compact('veriler'));
    }


    public function create()
    {
      return view('veriler.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'namelastname' => 'required|max:255',
        'email' => 'required',
      ]);
      Veri::create($request->all());
      return redirect()->route('veriler.index')
        ->with('success', 'Post created successfully.');
    }


    public function edit($id)
    {
      $veri = Veri::find($id);
      return view('veriler.edit', compact('veri'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'namelastname' => 'required|max:255',
        'email' => 'required',
      ]);
      $veri = Veri::find($id);
      $veri->update($request->all());
      return redirect()->route('veriler.index')
        ->with('success', 'Post updated successfully.');
    }
    

    public function show($id)
    {
      $veri = Veri::find($id);
      return view('veriler.show', compact('veri'));
    }


    public function destroy(string $id)
    {
    $veri = Veri::find($id);
    $veri->delete();
    return redirect()->route('veriler.index')
      ->with('success', 'Post deleted successfully');
    }
}
