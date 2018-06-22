<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manejoanimal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ManejoanimalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $manejoanimal = Manejoanimal::all();

        return view('backEnd.manejoanimal.index', compact('manejoanimal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.manejoanimal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['animal_id' => 'required', 'nome' => 'required', ]);

        Manejoanimal::create($request->all());

        Session::flash('message', 'Manejoanimal added!');
        Session::flash('status', 'success');

        return redirect('manejoanimal');
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
        $manejoanimal = Manejoanimal::findOrFail($id);

        return view('backEnd.manejoanimal.show', compact('manejoanimal'));
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
        $manejoanimal = Manejoanimal::findOrFail($id);

        return view('backEnd.manejoanimal.edit', compact('manejoanimal'));
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
        $this->validate($request, ['animal_id' => 'required', 'nome' => 'required', ]);

        $manejoanimal = Manejoanimal::findOrFail($id);
        $manejoanimal->update($request->all());

        Session::flash('message', 'Manejoanimal updated!');
        Session::flash('status', 'success');

        return redirect('manejoanimal');
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
        $manejoanimal = Manejoanimal::findOrFail($id);

        $manejoanimal->delete();

        Session::flash('message', 'Manejoanimal deleted!');
        Session::flash('status', 'success');

        return redirect('manejoanimal');
    }

}
