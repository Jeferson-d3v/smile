<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produto = "pizza";
        $idProduto = 1;
        $user = "João";
        $idUser = 1;
        $compra = '40,00';
        $idCompra = 1;
        
        $dados = [
            'produto' =>$produto,
            'idProduto' =>$idProduto,
            'user'=>$user,
            'idUser'=>$idUser,
            'compra'=>$compra,
            'idCompra'=>$idCompra
        ];

        return view ('home', $dados);
    }
}
