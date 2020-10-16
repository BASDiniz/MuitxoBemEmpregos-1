<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use App\Models\Idioma;
use App\Models\AreaFormacao;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Curriculo.index')->with('curriculos',Curriculo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Curriculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            \App\Validator\CurriculoValidator::validate($request->all());
            \App\Validator\IdiomaValidator::validate($request->all());
            \App\Validator\AreaFormacaoValidator::validate($request->all());

            $curriculo = new Curriculo();
            $curriculo->candidato_id = \Auth::user()->candidato()->get()->first()->id;
            $curriculo->info_adicional = $request->input('info_adicional');
            $curriculo->experiencia = $request->input('experiencia');
            $curriculo->save();
            $curriculo_id = $curriculo->id;

            $idioma = new Idioma();
            $idioma->idioma = $request->input('idioma');
            $idioma->curriculo_id = $curriculo_id;
            $idioma->save();

            $areaFormacao = new AreaFormacao();
            $areaFormacao->area = $request->input('area');
            $areaFormacao->curriculo_id = $curriculo_id;
            $areaFormacao->save();

            return view('Curriculo.show')->with('curriculo', $curriculo);

        }catch(\App\Validator\ValidationException $exception){
            return redirect(route('curriculos.create'))
            ->withErrors($exception->getValidator())
            ->withInput();
        }

        /*try{
            \App\Validator\CurriculoValidator::validate($request->all());
            $dados = $request->all();
            \App\Models\Curriculo::create($dados);
            return 'Curriculo Criado';
        }catch(\App\Validator\ValidationException $e){
            return redirect(route('curriculos.create'))->withErrors($e->getValidator())->withInput();
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculo $curriculo)
    {
        return view('Curriculo.show')->with('curriculo',$curriculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculo $curriculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculo $curriculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculo $curriculo)
    {
        //
    }
}
