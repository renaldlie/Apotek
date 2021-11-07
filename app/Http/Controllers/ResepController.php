<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResepController extends Controller
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
        $active_obat = "";
        $active_resep = "active";

        $resep = Resep::all();
        $obat = Obat::all();

        return view('resep', compact('active_welcome','active_obat','active_resep','resep','obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $obat = Obat::all();
        return view('createResep', compact('obat'));
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
        $code = Str::upper(Str::substr($request->resep, 0, 3));

        Resep::create([
            'resep_code' => $request -> r_code,
            'resep' => $request->r_name,
            'resep_description' => $request->r_desc
        ]);
        return redirect(route('resep.index'));
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
        $resep = Resep::where('resep_code', $id)->first();
       return view('showresep', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($resep_code)
    {
        //
        $resep = Resep::where('resep_code', $resep_code)->first();
        return view('editresep' , compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $resep = Resep::where('resep_code', $id)->first();
        $resep->update([
            'resep' => $request->r_name,
            'resep_code' => $request -> r_code,
            'resep_description' => $request->r_desc
        ]);
        return redirect(route('resep.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($resep_code)
    {
        //
        $resep = Resep::findOrFail($resep_code);
        $resep->delete();
        return redirect(route('resep.index'));
    }
}
