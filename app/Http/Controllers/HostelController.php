<?php

namespace ListaNegra\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use ListaNegra\Http\Requests;
use ListaNegra\Http\Controllers\Controller;
use Auth;
use ListaNegra\User;
use Redirect;
use \ListaNegra\Hostel as Hostel;

class HostelController extends Controller
{
    
    private $usuarioLogado;
    
    public function __construct(){
        
        $this->usuarioLogado =  Auth::user();
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostels = Hostel::all();
        return view ('hostel.index', ['hostels'=> $hostels, 'user' => $this->usuarioLogado]);
    }
    
    public function verificaSeExistePorNome($nome){
        $hostels = \ListaNegra\User::where('name', '=' ,$nome)->get()->first();
        return count($hostels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('hostel.create', ['user' => $this->usuarioLogado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|Requests\HostelRequestCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HostelRequestCreate $request)
    {
      
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $newHostel = Hostel::create(['telefone' => $request->input('telefone'),'user_id' => $user->id ,'descri' => $request->input('descri')]);
       
        return redirect( route('hostels.index'));

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
