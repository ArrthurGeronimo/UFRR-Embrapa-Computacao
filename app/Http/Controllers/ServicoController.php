<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ServicoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $servico = Servico::all();

        return view('backEnd.servico.index', compact('servico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.servico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'unidade' => 'required', ]);

        Servico::create($request->all());

        Session::flash('message', 'Servico added!');
        Session::flash('status', 'success');

        return redirect('servico');
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
        $servico = Servico::findOrFail($id);

        return view('backEnd.servico.show', compact('servico'));
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
        $servico = Servico::findOrFail($id);

        return view('backEnd.servico.edit', compact('servico'));
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

        $servico = Servico::findOrFail($id);
        $servico->update($request->all());

        Session::flash('message', 'Servico updated!');
        Session::flash('status', 'success');

        return redirect('servico');
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
        $servico = Servico::findOrFail($id);

        $servico->delete();

        Session::flash('message', 'Servico deleted!');
        Session::flash('status', 'success');

        return redirect('servico');
    }

}
