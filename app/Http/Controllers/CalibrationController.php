<?php

namespace App\Http\Controllers;

use App\Models\Calibration;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CalibrationController extends BaseController
{

   public function index()
   {
      $data = DB::table('calibrations')
         ->join('tools', 'calibrations.id', '=', 'tools.id')
         ->get();

      return view(
         'pages.data-kalibrasi.index',
         [
            "title" => "Data Kalibrasi"
         ]
      )->with('data', $data);
   }

   /**
    * Show the form for creating a new resource.
    */

   public function getCalibrationsDetails($cabid = 0)
   {

      $calibrations = Calibration::find($cabid);

      $html = "";
      if (!empty($calibrations)) {
         $html =
            "
            <tr>
               <td width='50%'><b>ID</b></td>
               <td width='70%'> " . $calibrations->id . "</td>
            </tr>
            <tr>
               <td width='50%'><b>Tanggal Kalibrasi</b></td>
               <td width='70%'> " . $calibrations->tanggal_kalibrasi . "</td>
            </tr>
            <tr>
               <td width='50%'><b>Petugas Penerima</b></td>
               <td width='70%'> " . $calibrations->petugas_penerima . "</td>
            </tr>
            <tr>
               <td width='50%'><b>Petugas Menyerahkan</b></td>
               <td width='70%'> " . $calibrations->petugas_menyerahkan . "</td>
            </tr>
            <tr>
               <td width='50%'><b>Expired</b></td>
               <td width='70%'> " . $calibrations->thl_berakhirnya_masa_kalibrasi . "</td>
            </tr>;
            <tr>
               <td width='50%'><b>Keterangan</b></td>
               <td width='70%'> " . $calibrations->ket_kalibrasi . "</td>
            </tr>";
      }
      $response['html'] = $html;
      return response()->json($response);
   }

   public function create(): View
   {
      return view('pages.data-kalibrasi.create');
   }

   public function store(Request $request): RedirectResponse
   {
      $request->validate([
         'no_kalibrasi' => 'required',
         'id_alat' => 'required',
         'tanggal_kalibrasi' => 'required',
         'petugas_penerima' => 'required',
         'petugas_menyerahkan' => 'required',
         'thl_berakhirnya_masa_kalibrasi' => 'required',
         'ket_kalibrasi' => 'required'
      ]);


      $input = $request->all();

      Calibration::create($input);

      return redirect()->route('datakalibrasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
   }
   public function show(string $id): View
   {
      $calibrations = Calibration::findOrFail($id);
      return view('datakalibrasi.show', compact('calibrations'));
   }

   public function edit(string $id): View
   {
      $calibrations = Calibration::findOrFail($id);
      return view('pages.data-kalibrasi.edit', compact('calibrations'));
   }

   public function update(Request $request, $id): RedirectResponse
   {
      $request->validate([
         'no_kalibrasi' => 'required',
         'id_alat' => 'required',
         'tanggal_kalibrasi' => 'required',
         'petugas_penerima' => 'required',
         'petugas_menyerahkan' => 'required',
         'thl_berakhirnya_masa_kalibrasi' => 'required',
         'ket_kalibrasi' => 'required'
      ]);

      $input = $request->all();
      $calibrations = Calibration::findOrFail($id);

      $calibrations->update($input);
      return redirect()->route('datakalibrasi.index')->with(['success' => 'Data Berhasil Diubah!']);
   }
}
