<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Tool;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AlatController extends Controller
{
    public function index()
    {
        $tools = Tool::latest()->paginate(5);
        $data['tools'] = Tool::select('*')->get();
        return view(
            'pages.alat.index',
            $data,
            [
                "title" => "Data Alat",

            ],
            compact('tools')
        );
    }
    public function getToolsDetails($toolsid = 0)
    {
        $tools = Tool::find($toolsid);

        $html = "";
        if (!empty($tools)) {
            $html =
                "<tr>
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

    public function create(): View
    {
        return view('pages.alat.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nomer_alat' => 'required',
            'nama_alat' => 'required',
            'spek_alat' => 'required',
            'lokasi' => 'required',
            'kondisi_alat' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048'
        ]);


        $input = $request->all();

        //upload image
        if ($image = $request->file('image')) {
            $destinationPath = 'frontend/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Tool::create($input);

        return redirect()->route('alat.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        $tool = Tool::findOrFail($id);
        return view('alat.show', compact('tool'));
    }

    public function edit(string $id): View
    {
        $tool = Tool::findOrFail($id);
        return view('pages.alat.edit', compact('tool'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nomer_alat' => 'required',
            'nama_alat' => 'required',
            'spek_alat' => 'required',
            'lokasi' => 'required',
            'kondisi_alat' => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        $input = $request->all();
        $tool = Tool::findOrFail($id);

        if ($image = $request->file('image')) {
            $destinationPath = 'frontend/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $tool->update($input);
        return redirect()->route('alat.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
