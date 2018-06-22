<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Praga;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PragaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $praga = Praga::all();

        return view('backEnd.praga.index', compact('praga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.praga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['amostra_id' => 'required', 'tipo' => 'required', 'especie' => 'required', 'densidade' => 'required', 'area' => 'required', ]);

        Praga::create($request->all());

        Session::flash('message', 'Praga added!');
        Session::flash('status', 'success');

        return redirect('praga');
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
        $praga = Praga::findOrFail($id);

        return view('backEnd.praga.show', compact('praga'));
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
        $praga = Praga::findOrFail($id);

        return view('backEnd.praga.edit', compact('praga'));
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
        $this->validate($request, ['amostra_id' => 'required', 'tipo' => 'required', 'especie' => 'required', 'densidade' => 'required', 'area' => 'required', ]);

        $praga = Praga::findOrFail($id);
        $praga->update($request->all());

        Session::flash('message', 'Praga updated!');
        Session::flash('status', 'success');

        return redirect('praga');
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
        $praga = Praga::findOrFail($id);

        $praga->delete();

        Session::flash('message', 'Praga deleted!');
        Session::flash('status', 'success');

        return redirect('praga');
    }

}
