<?php

namespace ListaNegra\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
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
        $hospedes=Hospede::all();
        return view ('hospede.index', ['user' => $this->usuarioLogado,
                        'hospedes' => $hospedes]);
    }


    public function verificaSeExistePorNome($nome){
        $hospedes = Hospede::where('name', '=' ,$nome)->get()->first();
        return count($hospedes);
    }

    public function getRorulos($id)
    {
        $hospede = Hospede::find($id);

        return $hospede->rotulos;
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
        $hospede = Hospede::find($id);
        return View('hospede.show',[
            'user' => $this->usuarioLogado,
            'hospede' => $hospede]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $hospede = Hospede::find($id);
        return view('hospede.edit',[
            'user' => $this->usuarioLogado,
            'hospede' => $hospede
        ]);
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
        return  $request->all();
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
