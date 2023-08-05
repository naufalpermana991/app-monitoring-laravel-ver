<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(): View
    {
        $data = DB::table('locations')
            ->join('tools', 'locations.id', '=', 'tools.id')
            ->get();

        $locations = Location::latest()->paginate(5);
        return view('pages.lokasi.index', compact('locations'), [
            "title" => "Lokasi"
        ])->with('locations', $data);
    }
    public function create(): View
    {
        return view('pages.lokasi.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_alat' => 'required',
            'nama_lokasi' => 'required',
            'tgl_update_lokasi' => 'required',
            'ket_lokasi' => 'required'
        ]);

        Location::create([
            'id_alat' => $request->id_alat,
            'nama_lokasi' => $request->nama_lokasi,
            'tgl_update_lokasi' => $request->tgl_update_lokasi,
            'ket_lokasi' => $request->ket_lokasi,
        ]);

        return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $location = Location::findOrFail($id);
        return view('lokasi.show', compact('location'));
    }

    public function edit(string $id): View
    {
        $location = Location::findorFail($id);

        return view('pages.lokasi.edit', compact('location'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'id_alat' => 'required',
            'nama_lokasi' => 'required',
            'tgl_update_lokasi' => 'required',
            'ket_lokasi' => 'required'
        ]);

        $location = Location::findorFail($id);

        $location->update([
            'id_alat' => $request->id_alat,
            'nama_lokasi' => $request->nama_lokasi,
            'tgl_update_lokasi' => $request->tgl_update_lokasi,
            'ket_lokasi' => $request->ket_lokasi
        ]);

        return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
