<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Tool;

class AlatController extends BaseController
{
    public function index()
    {
        $data['tools'] = Tool::select('*')->get();
        return view(
            'pages.daftar-alat.index',
            $data,
            [
                "title" => "Data Alat",
                "alat" => Tool::all()
            ]
        );
    }

    public function getToolsDetails($toolsid = 0)
    {
        $tools = Tool::find($toolsid);

        $html = "";
        if (!empty($tools)) {
            $html = "<tr>
              <td width='30%'><b>ID Alat</b></td>
              <td width='70%'> " . $tools->id . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Lokasi</b></td>
              <td width='70%'> " . $tools->lokasi . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Kondisi Alat</b></td>
              <td width='70%'> " . $tools->kondisi_alat . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Harga</b></td>
              <td width='70%'> " . $tools->harga . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Keterangan</b></td>
              <td width='70%'> " . $tools->keterangan . "</td>
           </tr>";
        }
        $response['html'] = $html;
        return response()->json($response);
    }
}
