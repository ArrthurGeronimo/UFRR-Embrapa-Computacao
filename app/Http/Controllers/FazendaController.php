<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Fazenda;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class FazendaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*
        $fazenda = Fazenda::all();
        */
        $fazenda = Fazenda::with('usuario')->where('user_id', Auth::user()->id)->get();
        return view('backEnd.fazenda.index', compact('fazenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   

        return view('backEnd.fazenda.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['user_id' => 'required', 'nome' => 'required', 'endereco' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'estado' => 'required', 'municipio' => 'required', 'responsavel' => 'required', 'celular_responsavel' => 'required', ]);
        
        /*
        Fazenda::create($request->all());
        */

        Fazenda::create([
            'user_id' => $request['user_id'],
            'nome' => $request['nome'],
            'endereco' => $request['endereco'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'estado' => $request['estado'],
            'municipio' => $request['municipio'],
            'responsavel' => $request['responsavel'],
            'celular_responsavel' => $request['celular_responsavel'],
            'slug' => str_slug($request['nome']),
        ]);

        Session::flash('message', 'Fazenda added!');
        Session::flash('status', 'success');

        return redirect('fazenda');
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
        $fazenda = Fazenda::findOrFail($id);

        return view('backEnd.fazenda.show', compact('fazenda'));
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
        $fazenda = Fazenda::findOrFail($id);

        return view('backEnd.fazenda.edit', compact('fazenda'));
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
        $this->validate($request, ['user_id' => 'required', 'nome' => 'required', 'endereco' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'estado' => 'required', 'municipio' => 'required', 'responsavel' => 'required', 'celular_responsavel' => 'required', ]);

        $fazenda = Fazenda::findOrFail($id);
        $fazenda->update($request->all());

        Session::flash('message', 'Fazenda updated!');
        Session::flash('status', 'success');

        return redirect('fazenda');
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
        $fazenda = Fazenda::findOrFail($id);

        $fazenda->delete();

        Session::flash('message', 'Fazenda deleted!');
        Session::flash('status', 'success');

        return redirect('fazenda');
    }

    public function verTalhoes($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.talhao.show')->with("fazenda", $fazenda);
    }
    public function criarTalhao($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.talhao.create')->with("fazenda", $fazenda);
    }

    public function verAnimais($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.animal.show')->with("fazenda", $fazenda);
    }
    public function criarAnimal($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.animal.create')->with("fazenda", $fazenda);
    }

}
