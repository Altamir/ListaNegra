<?php

namespace ListaNegra\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
        $nameDocs = ['CPF','RG','Passaport'];
        return view ('hospede.create', [
            'user' => $this->usuarioLogado,
            'rotulos' => $rotulos,
            'nameDocs' => $nameDocs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request_ = $request->all();
        $request_['user_id'] = $this->usuarioLogado->id;
        $hospede = Hospede::create($request_);

        $rotulo_hospede = [];
        $rotulo_hospede['hospede_id'] = $hospede->id;
        $rotulo_hospede['rotulo_id'] = $request_['rotulo_id'];
        $rotulo_hospede['descri'] = $request_['descri'];

        $documento_hospede = [];
        $documento_hospede['hospede_id'] = $hospede->id;
        $documento_hospede['name'] = $request_['documento_name'];
        $documento_hospede['numero'] = $request_['documento_num'];
        DB::table('hospedes_rotulos')->insert(
           $rotulo_hospede
        );

        DB::table('documentos')->insert(
            $documento_hospede
        );
        return redirect( route('hospede'));
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
        $rotulos = Rotulo::all();
        return view('hospede.edit',[
            'user' => $this->usuarioLogado,
            'hospede' => $hospede,
            'rotulos'=> $rotulos
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
        $dados_request = $request->all();
        $rotulo_hospede = [];
        //
        if(isset($dados_request['rotulo_id'])){
            $rotulo_hospede['hospede_id'] = $id;
            $rotulo_hospede['rotulo_id'] = $dados_request['rotulo_id'];
            $rotulo_hospede['descri'] = $dados_request['descri'];
        }



        Hospede::find($id)->update( $dados_request ) ;


        if(isset($dados_request['rotulo_id'])) {
            for ($i = 0; $i < count($rotulo_hospede['rotulo_id']); $i++) {

                DB::table('hospedes_rotulos')->insert(
                    [   'hospede_id' => $rotulo_hospede['hospede_id'],
                        'rotulo_id' => $rotulo_hospede['rotulo_id'][$i],
                        'descri' => $rotulo_hospede['descri'][$i]
                    ]
                );
            }
        }
        return redirect( route('hospede'));
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
