<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Soloamostra;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SoloamostraController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $soloamostra = Soloamostra::all();

        return view('backEnd.soloamostra.index', compact('soloamostra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.soloamostra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'amostra_id' => 'required', 'data' => 'required', 'profundidade' => 'required', 'ph' => 'required', 'mo' => 'required', 'p' => 'required', 'k' => 'required', 'ca' => 'required', 'mg' => 'required', 'h+ai' => 'required', 'ai' => 'required', 's' => 'required', 'cu' => 'required', 'fe' => 'required', 'zn' => 'required', 'mn' => 'required', 'b' => 'required', ]);

        Soloamostra::create($request->all());

        Session::flash('message', 'Soloamostra added!');
        Session::flash('status', 'success');

        return redirect('soloamostra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soloamostra = Soloamostra::findOrFail($id);

        return view('backEnd.soloamostra.show', compact('soloamostra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soloamostra = Soloamostra::findOrFail($id);

        return view('backEnd.soloamostra.edit', compact('soloamostra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'amostra_id' => 'required', 'data' => 'required', 'profundidade' => 'required', 'ph' => 'required', 'mo' => 'required', 'p' => 'required', 'k' => 'required', 'ca' => 'required', 'mg' => 'required', 'h+ai' => 'required', 'ai' => 'required', 's' => 'required', 'cu' => 'required', 'fe' => 'required', 'zn' => 'required', 'mn' => 'required', 'b' => 'required', ]);

        $soloamostra = Soloamostra::findOrFail($id);
        $soloamostra->update($request->all());

        Session::flash('message', 'Soloamostra updated!');
        Session::flash('status', 'success');

        return redirect('soloamostra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soloamostra = Soloamostra::findOrFail($id);

        $soloamostra->delete();

        Session::flash('message', 'Soloamostra deleted!');
        Session::flash('status', 'success');

        return redirect('soloamostra');
    }

}
