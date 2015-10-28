<?php

namespace ListaNegra\Http\Controllers;

use Illuminate\Http\Request;
use ListaNegra\Http\Requests;
use ListaNegra\Http\Controllers\Controller;
use Auth;
use ListaNegra\Http\Requests\RotuloRequestCreate;
use ListaNegra\User;
use \ListaNegra\Rotulo as Rotulo;


class RotuloController extends Controller
{

    private $user;

    public function __construct(){
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rotulos = Rotulo::all();
        return view('rotulo.index',['rotulos' => $rotulos, 'user' => $this->user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('rotulo.create', ['user' => $this->user ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|RotuloRequestCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(RotuloRequestCreate $request)
    {
        Rotulo::create($request->all());
        return redirect( route('rotulo'));
    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function showAll()
    {
       return Rotulo::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rotulo = Rotulo::find($id);
        $user = $this->user;
        return view('rotulo.show', compact('rotulo', 'user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rotulo = Rotulo::find($id);
        $user = $this->user;
        return view('rotulo.edit', compact('rotulo', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request|RotuloRequestCreate $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RotuloRequestCreate $request, $id)
    {
        Rotulo::find($id)->update($request->all());
        return redirect( route('rotulo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rotulo::find($id)->delete();
        return redirect( route('rotulo'));
    }
}
