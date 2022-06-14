<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [ 
            0 => [
                'nome'   => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ'   => '00.000.000/000.01',
                'ddd'    => '61', //Brasília (DF)
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome'   => 'Fornecedor 2',
                'status' => 'N',
                'ddd'    => '11', //São Paulo (SP)
                'telefone' => '00000-0000'
            ],
            2 => [
                'nome'   => 'Fornecedor 3',
                'status' => 'N',
                'ddd'    => '89', //Piaui (PI)
                'telefone' => '00000-0000'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
