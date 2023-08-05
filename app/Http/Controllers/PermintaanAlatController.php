<?php

namespace App\Http\Controllers;

use App\Models\ToolRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PermintaanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['data'] = ToolRequest::select('*')->get();
        return view(
            'pages.permintaan-alat.index',
            $data,
            [
                "title" => "Data Permintaan Alat",
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.permintaan-alat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_permintaan' => 'required',
            'id_alat' => 'required',
            'user_peminta' => 'required',
            'user_penyerah' => 'required',
            'user_penerima' => 'required',
            'user_penyetuju' => 'required',
            'tgl_permintaan' => 'required',
            'status_penyetuju' => 'required',
            'status_penyerah' => 'required',
            'status_penerima' => 'required',
            'tgl_kembali' => 'required',
            'kondisi' => 'required',
        ]);
        $input = $request->all();
        ToolRequest::create($input);

        return redirect()->route('permintaan-alat.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data = ToolRequest::findOrFail($id);
        return view('permintaan-alat.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $data = ToolRequest::findOrFail($id);
        return view('pages.permintaan-alat.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'no_permintaan' => 'required',
            'id_alat' => 'required',
            'user_peminta' => 'required',
            'user_penyerah' => 'required',
            'user_penerima' => 'required',
            'user_penyetuju' => 'required',
            'tgl_permintaan' => 'required',
            'status_penyetuju' => 'required',
            'status_penyerah' => 'required',
            'status_penerima' => 'required',
            'tgl_kembali' => 'required',
            'kondisi' => 'required',
        ]);

        $input = $request->all();
        $data = ToolRequest::findOrFail($id);

        $data->update($input);
        return redirect()->route('permintaan-alat.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function getToolRequestsDetails($reqsid = 0)
    {
        $requests = ToolRequest::find($reqsid);

        $html = "";
        if (!empty($requests)) {
            $html =
                "<tr>
              <td width='50%'><b>User Penerima</b></td>
              <td width='70%'> " . $requests->user_penerima . "</td>
           </tr>
           <tr>
              <td width='50%'><b>User Penyetuju</b></td>
              <td width='70%'> " . $requests->user_penyetuju . "</td>
           </tr>
           <tr>
              <td width='50%'><b>Tanggal Permintaan</b></td>
              <td width='70%'> " . $requests->tgl_permintaan . "</td>
           </tr>
           <tr>
              <td width='50%'><b>Status Penyetuju</b></td>
              <td width='70%'> " . $requests->status_penyetuju . "</td>
           </tr>
           <tr>
              <td width='50%'><b>Status Penyerah</b></td>
              <td width='70%'> " . $requests->status_penyerah . "</td>
           </tr>
           <tr>
              <td width='50%'><b>Status Penerima</b></td>
              <td width='70%'> " . $requests->status_penerima . "</td>
           </tr>
           <tr>
              <td width='50%'><b>Tanggal Kembali</b></td>
              <td width='70%'> " . $requests->tgl_kembali . "</td>
           </tr>;
           <tr>
              <td width='50%'><b>Kondisi</b></td>
              <td width='70%'> " . $requests->kondisi . "</td>
           </tr>";
        }
        $response['html'] = $html;
        return response()->json($response);
    }

    public function destroy(ToolRequest $toolRequest)
    {
        //
    }
}
