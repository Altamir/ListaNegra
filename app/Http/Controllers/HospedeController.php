<?php

namespace ListaNegra\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use ListaNegra\Hospede;
use ListaNegra\Hostel;
use ListaNegra\Http\Requests;
use ListaNegra\Http\Controllers\Controller;
use Auth;
use ListaNegra\Rotulo;

class HospedeController extends Controller
{
    
    
     private $usuarioLogado;
    
    public function __construct(){
        
        $this->usuarioLogado =  Auth::user();
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        dd( Hospede::all());
    }


    public function verificaSeExistePorNome($nome){
        $hospedes = Hospede::where('name', '=' ,$nome)->get()->first();
        return count($hospedes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $rotulos = Rotulo::all();
        return view ('hospede.create', ['user' => $this->usuarioLogado, 'rotulos' => $rotulos]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request_ = $request->all();
        $request_['user_id'] = $this->usuarioLogado->id;
        
        return Hospede::create($request_);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
