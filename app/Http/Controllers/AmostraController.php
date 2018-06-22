<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Amostra;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AmostraController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $amostra = Amostra::all();

        return view('backEnd.amostra.index', compact('amostra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.amostra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['numero_amostra' => 'required', 'bloco' => 'required', 'tratamento' => 'required', 'area_parcela' => 'required', 'animal_id' => 'required', 'praga_id' => 'required', 'plantiocultura_id' => 'required', 'soloamostra_id' => 'required', 'pastagemamostra_id' => 'required', ]);

        Amostra::create($request->all());

        Session::flash('message', 'Amostra added!');
        Session::flash('status', 'success');

        return redirect('amostra');
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
        $amostra = Amostra::findOrFail($id);

        return view('backEnd.amostra.show', compact('amostra'));
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
        $amostra = Amostra::findOrFail($id);

        return view('backEnd.amostra.edit', compact('amostra'));
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
        $this->validate($request, ['numero_amostra' => 'required', 'bloco' => 'required', 'tratamento' => 'required', 'area_parcela' => 'required', 'animal_id' => 'required', 'praga_id' => 'required', 'plantiocultura_id' => 'required', 'soloamostra_id' => 'required', 'pastagemamostra_id' => 'required', ]);

        $amostra = Amostra::findOrFail($id);
        $amostra->update($request->all());

        Session::flash('message', 'Amostra updated!');
        Session::flash('status', 'success');

        return redirect('amostra');
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
        $amostra = Amostra::findOrFail($id);

        $amostra->delete();

        Session::flash('message', 'Amostra deleted!');
        Session::flash('status', 'success');

        return redirect('amostra');
    }

}
