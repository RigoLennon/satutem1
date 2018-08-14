<?php

namespace SATUTeM\Http\Controllers;

use SATUTeM\User;
use Illuminate\Http\Request;
use SATUTeM\Declaration;

class DeclarationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declarations = Declaration::all();
        $users = User::all();
        return view('index')->with('declarations', $declarations , 'users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDeclaration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $declaration = new Declaration();
        $data = $this -> validate($request,[
            'period' => 'required',
            'declaration_type' => 'required',
            'excercise' => 'required',
            /*'date' => 'required',
            'operation' => 'required',
            'declaration' => 'required',
            'capture' => 'required'*/
        ]);

        $declaration->saveDeclaration($data);
        return redirect('/')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $declaration = Declaration::find($id);
        return view('declaration.edit', compact('declaration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['periodicity' => 'required', 'period' => 'required', 'date' => 'required', 'operation' => 'required', 'declaration_type' => 'required', 'capture' => 'required']);

        Declaration::find($id)->update($request->all());
        return redirect()->route('declaration.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Declaration::find($id)->delete();
        return redirect()->route('declaration.index')->with('success','Registro eliminado correctamente');
    }

    public function pdf(){
        $declarations = Declaration::all();

        $pdf = \PDF::loadView('pdf.declarations', compact('declarations'));

        return $pdf->download('listado.pdf');
    }
}
