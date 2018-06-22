<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cultura;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CulturaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cultura = Cultura::all();

        return view('backEnd.cultura.index', compact('cultura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.cultura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['especie' => 'required', 'material' => 'required', ]);

        Cultura::create($request->all());

        Session::flash('message', 'Cultura added!');
        Session::flash('status', 'success');

        return redirect('cultura');
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
        $cultura = Cultura::findOrFail($id);

        return view('backEnd.cultura.show', compact('cultura'));
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
        $cultura = Cultura::findOrFail($id);

        return view('backEnd.cultura.edit', compact('cultura'));
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
        $this->validate($request, ['especie' => 'required', 'material' => 'required', ]);

        $cultura = Cultura::findOrFail($id);
        $cultura->update($request->all());

        Session::flash('message', 'Cultura updated!');
        Session::flash('status', 'success');

        return redirect('cultura');
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
        $cultura = Cultura::findOrFail($id);

        $cultura->delete();

        Session::flash('message', 'Cultura deleted!');
        Session::flash('status', 'success');

        return redirect('cultura');
    }

}
