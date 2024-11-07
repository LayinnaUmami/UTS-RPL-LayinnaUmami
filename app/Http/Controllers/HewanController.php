<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hewans = Hewan::all();
        return view('hewans.index', compact('hewans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hewans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idHewan' => 'required|unique:hewans,idHewan',
            'namaHewan' => 'required',
            'jenisHewan' => 'required',
            'idPemilik' => 'required',
        ]);

        Hewan::create($request->all());
        return redirect()->route('hewans.index')->with('success', 'Hewan created successfully.');
    }

    /**
     * Display the specified resource by idHewan.
     */
    public function show($idHewan)
    {
        $hewan = Hewan::where('idHewan', $idHewan)->firstOrFail();
        return view('hewans.show', compact('hewan'));
    }

    /**
     * Show the form for editing the specified resource by idHewan.
     */

    public function edit($idHewan)
{
    $hewan = Hewan::findOrFail($idHewan); // Gunakan key yang sesuai
    return view('hewans.edit', compact('hewan'));
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idHewan)
{
    $request->validate([
        'namaHewan' => 'required|string|max:255',
        'jenisHewan' => 'required|string|max:255',
        'idPemilik' => 'required|integer',
    ]);

    $hewan = Hewan::findOrFail($idHewan);
    $hewan->update($request->all()); // Memperbarui data hewan
    return redirect()->route('hewans.index')->with('success', 'Data hewan berhasil diperbarui.'); // Redirect setelah update
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idHewan)
    {
        $hewan = Hewan::where('idHewan', $idHewan)->firstOrFail();
        $hewan->delete();
        return redirect()->route('hewans.index')->with('success', 'Hewan deleted successfully.');
    }
}
