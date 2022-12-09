<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InputController extends Controller
{

    public function index(Request $request)
    {
        $nome = $request->nome;
        $cpf = $request->cpf;
        $virtua = $request->virtua;

        $vend = DB::table('input')->get();
        return view('INPUT.input',compact('vend','nome','cpf','virtua'));
    }

    public function search(Request $request)
    {
        $vend = DB::table('input');

        $nome = $request->nome;
        $cpf = $request->cpf;
        $virtua = $request->virtua;
        if( $request->nome){
            $vend = $vend->where('name', "$request->nome");
        }
        if( $request->cpf){
            $vend = $vend->where('document', "$request->cpf");
        }
        if( $request->virtua){
            $vend = $vend->where('prod_net', "$request->virtua");
        }
        $vend = $vend->get();
        return view('INPUT.input',compact('vend','nome','cpf','virtua'));
    }

    public function create(Request $request)
    {
        return view('INPUT.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' =>$request->name,
			'document' =>$request->document,
			'birthday' =>$request->birthday,
			'document_number' =>$request->document_number,
			'phone' =>$request->phone,
			'phone2' =>$request->phone2,
			'cep' =>$request->cep,
			'logradouro' =>$request->logradouro,
			'bairro' =>$request->bairro,
			'num_fachada' =>$request->num_fachada,
			'complemento' =>$request->complemento,
			'cidade' =>$request->cidade,
			'uf' =>$request->uf,
			'referencia' =>$request->referencia,
			'prod_net' =>$request->prod_net,
			'prod_tv' =>$request->prod_tv,
			'prod_movel' =>$request->prod_movel,
			'prod_fixo' =>$request->prod_fixo,
        ];
        DB::table('input')->insert($data);
        return redirect()->route('input.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $vend = DB::table('input')->where('id',$id)->first();
        return view('INPUT.edit', compact('vend'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' =>$request->name,
			'document' =>$request->document,
			'birthday' =>$request->birthday,
			'document_number' =>$request->document_number,
			'phone' =>$request->phone,
			'phone2' =>$request->phone2,
			'cep' =>$request->cep,
			'logradouro' =>$request->logradouro,
			'bairro' =>$request->bairro,
			'num_fachada' =>$request->num_fachada,
			'complemento' =>$request->complemento,
			'cidade' =>$request->cidade,
			'uf' =>$request->uf,
			'referencia' =>$request->referencia,
			'prod_net' =>$request->prod_net,
			'prod_tv' =>$request->prod_tv,
			'prod_movel' =>$request->prod_movel,
			'prod_fixo' =>$request->prod_fixo,
        ];
        DB::table('input')->where('id', $id)->update($data);
        return redirect()->route('input.index');
    }

    public function destroy($id)
    {
        
        $vend = DB::table('input')->where('id',$id)->delete($id);
        return redirect()->route('input.index');

    }

    /*  PARCEIRAS */
    public function allpa(){
        $operadora = DB::table('operadoras_parc')->get();
        return view('pages.groups.allpa', compact('operadora'));
    }

    public function createpa(Request $request)
    {
        DB::table('operadoras_parc')->insert($request->all());
       return redirect()->route('config.groups.allpa');
    }

    public function editpa($id)
    {
        $operadora = DB::table('operadoras_parc')->where('id',$id)->first();
        if(!empty($operadora))
        {
            return view('pages.groups.editpa', compact('operadora'));
        }
        else
        {
            return redirect()->route('config.groups.allpa');
        }
    }

    public function updatepa(Request $request, $id)
    {
        $data = [
            'empresas_value' =>$request->empresas_value,
        ];
        DB::table('operadoras_parc')->where('id', $id)->update($data);
        return redirect()->route('config.groups.allpa');
    }

    public function deletepa(Request $request)
    {
            $id = $request->par_id;
            $operadora = DB::table('operadoras_parc')->where('id', $id)->delete($id);
            return redirect()->route('config.groups.allpa');
    }

    /* Final PARCEIRAS */
}
