<?php

namespace App\Http\Controllers;
use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('casts.index')->with([
            'casts' => Cast::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casts.create',['casts'=>Cast::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
            'umur'=>'required|numeric',
            'bio'=>'required',


        ],[
        'umur.required' => 'Kolom umur harus diisi.',
        'umur.numeric' => 'Kolom umur harus berupa angka.',
    
    ]);
        Cast::create($validatedData);
        return redirect('/casts')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $casts = Cast::find($id);
        return view('casts.show', compact('casts'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('casts.edit', 
        ['casts'=>Cast::find($id),
        
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
            'umur'=>'required|numeric',
            'bio'=>'required',


        ]);
        Cast::where('id',$id)->update($validatedData);
        return redirect('/casts')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::destroy($id);
        return redirect('/casts')->with('pesan','Data berhasil di hapus');
    }
}