@extends('site.layouts.basico')
@section('titulo', 'Contato')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina container">
            <div class="contato-principal justify-content-center">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                    <p>Nosso tempo médio de resposta é de até 48 horas</p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')
@endsection