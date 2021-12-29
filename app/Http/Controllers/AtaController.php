<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ata;

class AtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atas = Ata::all();
        return view('/ata/index',['atas' => $atas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/ata/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atas = new Ata;

        $atas->title = $request->title;
        $atas->description = $request->description;

        $atas->save();
        return redirect('/ata/index')->with('msg','Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atas = Ata::findOrFail($id);
        return view('ata.show',['atas' => $atas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atas = Ata::findOrFail($id);
        return view('ata.edit',['atas' => $atas]);
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
        Ata::findOrFail($request->id)->update($request->all());

        return redirect('/ata/index')->with('msg','Cadastro editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ata::findOrFail($id)->delete();

        return redirect('/ata/index')->with('msg','Membro excluído com sucesso!');
    }
}
