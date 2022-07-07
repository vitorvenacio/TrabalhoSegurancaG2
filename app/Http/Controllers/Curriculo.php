<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculoRequest;
use Illuminate\Http\Request;
use App\Models\Curriculo as ModelCurriculo;

class Curriculo extends Controller
{
    private $objCurriculo;
    public function __construct()
    {
        $this->objCurriculo = new ModelCurriculo();
    }
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculo = $this->objCurriculo->all();
        return view('index', compact('curriculo'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurriculoRequest $request)
    {
        $cadastro = $this->objCurriculo->create([
            'name'=>$request->name,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'enderecoweb'=>$request->enderecoweb,
            'experiencias'=>$request->experiencias

        ]);

        if($cadastro) {
            return redirect('curriculos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curriculo=$this->objCurriculo->find($id);
        return view('show', compact('curriculo'));
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
