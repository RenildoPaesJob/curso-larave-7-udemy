<?php
use App\Http\Controllers\{
    ContatoController,
    PrincipalController,
    SobreNosController,
    TesteController,
    FornecedoresController
};
use Illuminate\Support\Facades\Route;

//ROUTE COM PARAMERTS
/*
    Route::get('/contato/{nome}/{id_categoria}',function (
        String $nome = 'Desconhecido',
        int $id_categoria = 1 // 1- Informacion
    ) {
        echo "estamos aqui: $nome - $id_categoria";
    })->where('nome', '[A-Za-z]+')
    ->where('id_categoria', '[0-9]+')
    ->name('contato.nome_categoria');
*/
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato',[ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores',[FornecedoresController::class, 'index'])->name('fornecedores.index');
    Route::get('/produtos',function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'O endereço acessado não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir à tela principal';
});