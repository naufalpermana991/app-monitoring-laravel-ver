<?php

namespace App\Http\Controllers;

use App\Models\Calibration;
use App\Http\Requests\StoreCalibrationRequest;
use App\Http\Requests\UpdateCalibrationRequest;

use Illuminate\Routing\Controller as BaseController;

class CalibrationController extends BaseController
{

   public function index()
   {
      $data['calibrations'] = Calibration::select('*')->get();
      return view(
         'pages.data-kalibrasi.index',
         $data,
         [
            "title" => "Data Kalibrasi",
            "kalibrasi" => Calibration::all()
         ]
      );
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
               <td width='30%'><b>ID</b></td>
               <td width='70%'> " . $calibrations->id . "</td>
            </tr>
            <tr>
               <td width='30%'><b>Kode Alat</b></td>
               <td width='70%'> " . $calibrations->id_alat . "</td>
            </tr>
            <tr>
               <td width='30%'><b>Tanggal Kalibrasi</b></td>
               <td width='70%'> " . $calibrations->tanggal_kalibrasi . "</td>
            </tr>
            <tr>
               <td width='30%'><b>Petugas Penerima</b></td>
               <td width='70%'> " . $calibrations->petugas_penerima . "</td>
            </tr>
            <tr>
               <td width='30%'><b>Petugas Menyerahkan</b></td>
               <td width='70%'> " . $calibrations->petugas_menyerahkan . "</td>
            </tr>
            <tr>
               <td width='30%'><b>Expired</b></td>
               <td width='70%'> " . $calibrations->thl_berakhirnya_masa_kalibrasi . "</td>
            </tr>;
            <tr>
               <td width='30%'><b>Keterangan</b></td>
               <td width='70%'> " . $calibrations->ket_kalibrasi . "</td>
            </tr>";
      }
      $response['html'] = $html;
      return response()->json($response);
   }
}
