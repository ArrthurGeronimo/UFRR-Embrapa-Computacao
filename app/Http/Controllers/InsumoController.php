<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Insumo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InsumoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $insumo = Insumo::all();

        return view('backEnd.insumo.index', compact('insumo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.insumo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'unidade' => 'required', ]);

        Insumo::create($request->all());

        Session::flash('message', 'Insumo added!');
        Session::flash('status', 'success');

        return redirect('insumo');
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
        $insumo = Insumo::findOrFail($id);

        return view('backEnd.insumo.show', compact('insumo'));
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
        $insumo = Insumo::findOrFail($id);

        return view('backEnd.insumo.edit', compact('insumo'));
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
        $this->validate($request, ['nome' => 'required', 'unidade' => 'required', ]);

        $insumo = Insumo::findOrFail($id);
        $insumo->update($request->all());

        Session::flash('message', 'Insumo updated!');
        Session::flash('status', 'success');

        return redirect('insumo');
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
        $insumo = Insumo::findOrFail($id);

        $insumo->delete();

        Session::flash('message', 'Insumo deleted!');
        Session::flash('status', 'success');

        return redirect('insumo');
    }

}
