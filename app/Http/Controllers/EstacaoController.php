<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estacao;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class EstacaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $estacao = Estacao::all();

        return view('backEnd.estacao.index', compact('estacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.estacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['talhao_id' => 'required', 'fazenda_id' => 'required', 'codigo' => 'required', 'nome' => 'required', 'responsavel' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'altitude' => 'required', 'data_primeira_coleta' => 'required', ]);

        Estacao::create($request->all());

        Session::flash('message', 'Estacao added!');
        Session::flash('status', 'success');

        return redirect('estacao');
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
        $estacao = Estacao::findOrFail($id);

        return view('backEnd.estacao.show', compact('estacao'));
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
        $estacao = Estacao::findOrFail($id);

        return view('backEnd.estacao.edit', compact('estacao'));
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
        $this->validate($request, ['talhao_id' => 'required', 'fazenda_id' => 'required', 'codigo' => 'required', 'nome' => 'required', 'responsavel' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'altitude' => 'required', 'data_primeira_coleta' => 'required', ]);

        $estacao = Estacao::findOrFail($id);
        $estacao->update($request->all());

        Session::flash('message', 'Estacao updated!');
        Session::flash('status', 'success');

        return redirect('estacao');
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
        $estacao = Estacao::findOrFail($id);

        $estacao->delete();

        Session::flash('message', 'Estacao deleted!');
        Session::flash('status', 'success');

        return redirect('estacao');
    }

}
