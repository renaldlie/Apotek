<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $active_welcome = "";
        $active_obat = "active";
        $active_resep = "";

        $obats = Obat::all();
       
        

        return view('obat', compact('active_welcome','active_obat','active_resep','obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('createObat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $code = Str::upper(Str::substr($request->obat, 0, 3));
       
        Obat::create([
            'code' => $request -> o_code,
            'obat' => $request->o_name,
            'jenis_obat' => $request->o_jenis,
            'tipe_obat' => $request->o_tipe,
            'description' => $request->o_desc
        ]);
        return redirect(route('obat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $obat = Obat::where('code', $id)->first();
       return view('showobat', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        //
        $obat = Obat::findOrFail($code);
        return view('editobat' , compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $resep_code)
    {
        //
        
        $obat = Obat::findOrFail($resep_code);
        $obat->update([
            'code' => $request -> o_code,
            'obat' => $request->o_name,
            'jenis_obat' => $request->o_jenis,
            'tipe_obat' => $request->o_tipe,
            'description' => $request->o_desc
        ]);
        return redirect(route('obat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        //
        $obat = Obat::findOrFail($code);
        $obat->delete();
        return redirect(route('obat.index'));
    }
}
