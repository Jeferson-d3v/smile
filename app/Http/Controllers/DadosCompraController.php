<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosCompraController extends Controller
{
    public function index(Request $request){
        $dados = [
            'IdProduto'=>$request->input('IdProduto'),
            'Produto'=>$request->input('Produto'),
            'IdUser'=>$request->input('IdUser'),
            'User'=>$request->input('User'),
            'IdCompra'=>$request->input('IdCompra'),
            'Compra'=>$request->input('Compra')
        ];
        return view('dados-compra', $dados);
    }
}
