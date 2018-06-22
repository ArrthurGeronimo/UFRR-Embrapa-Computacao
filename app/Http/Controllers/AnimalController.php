<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AnimalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animal = Animal::all();

        return view('backEnd.animal.index', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fazenda_id' => 'required', 'numero_fazenda' => 'required', 'pai' => 'required', 'mae' => 'required', 'nascimento' => 'required', 'procedencia' => 'required', 'entrada_fazenda' => 'required', ]);

        Animal::create($request->all());

        Session::flash('message', 'Animal added!');
        Session::flash('status', 'success');
        /*
        return redirect('animal');
        */
        Session::flash('message', "Animal Adicionado com Sucesso!");
        return redirect()->back();
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
        $animal = Animal::findOrFail($id);

        return view('backEnd.animal.show', compact('animal'));
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
        $animal = Animal::findOrFail($id);

        return view('backEnd.animal.edit', compact('animal'));
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
        $this->validate($request, ['fazenda_id' => 'required', 'numero_fazenda' => 'required', 'pai' => 'required', 'mae' => 'required', 'nascimento' => 'required', 'procedencia' => 'required', 'entrada_fazenda' => 'required', ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        Session::flash('message', 'Animal updated!');
        Session::flash('status', 'success');

        /*
        return redirect('animal');
        */
        Session::flash('message', "Animal Editado com Sucesso!");
        return redirect(url()->previous());
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
        $animal = Animal::findOrFail($id);

        $animal->delete();

        Session::flash('message', 'Animal deleted!');
        Session::flash('status', 'success');

        return redirect('animal');
    }

}
