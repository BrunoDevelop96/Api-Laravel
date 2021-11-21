<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getDados',function(){
   
    //Array dos Dados
    
    $dados = array(
             
        'Situação' =>'Ativa',
        'Número do CNPJ' => '07.397.220/0001-40',
        'Razão Social' => 'Instituto Brasileiro De Gestao & Marketing Ltda' ,
        'Nome Fantasia'  => 'Unibra',
        'Data de Abertura' => '24/05/2005',
        'Capital Social' => 'R$ 938.700,00',
        'Tipo' =>  'MATRIZ',
        'Natureza Jurídica' => 'Sociedade Empresária Limitada',
        'Porte da Empresa'=>'DEMAIS',
        'Qnt. de Funcionários' =>'Indeterminada',
        'Faturamento Presumido'=> 'Indeterminado',
        'Telefone'=> '(81) 3222-3547',
        'E-mail'=> 'dev@grupounibra.com',
        'Estado / UF' => 'Pernambuco / PE',
        'Município' => 'Recife',
        'Bairro' => 'Boa Vista',
        'Logradouro' =>  'Rua Joaquim Felipe',
        'Número' =>' 50',
        'Complemento' => ' ',
        'CEP' =>'50.050-365',
        'Atividade econômica' => '8532-5/00 Educação superior - graduação e pós-graduação',
    );

      echo json_encode($dados);         
        
});
