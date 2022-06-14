{{-- comentários --}}
@php
   //  codigo php
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo.
@endif --}}

@isset($fornecedores)
   {{-- @for ($i = 0; isset($fornecedores[$i]); $i++) --}}
   {{-- @php $i = 0 @endphp --}}
   {{-- @while (isset($fornecedores[$i])) --}}
   {{-- @foreach ($fornecedores as $key => $fornecedor) --}}
   @forelse ($fornecedores as $key => $fornecedor)
      Interação Atual: {{ $loop->iteration }} <br>
      Fornecedor: {{ $fornecedor['nome'] }} <br>
      Status:     {{ $fornecedor['status'] }} <br>
      CNPJ:       {{ $fornecedor['CNPJ'] ?? 'Dado não informado' }} <br>
      Telefone:   {{ $fornecedor['ddd'] ?? 'Dado não informado' }} {{ $fornecedor['telefone'] ?? 'Dado não informado' }} <br>
         @if ($loop->first)
            Primeira Interação
         @endif
         @if ($loop->last)
            Ultima Interação
            <br>
            Total de registros: {{ $loop->count }}<br>

         @endif
      <hr>
   @empty 
      Não existe fornecedores cadastrados
   @endforelse
   {{-- @endforeach --}}
   {{-- @php $i++ @endphp --}}
   {{-- @endwhile --}}
   {{-- @endfor --}}

   {{-- 
      @switch($fornecedores[2]['ddd'])
      @case('11')
            São Paulo (SP)
         @break
      @case('61')
         Brasília (DF)
         @break
      @case('89')
         Piauí (PI)
         @break
      @default
         Estado não identificado
      @endswitch 
   --}}

@endisset

{{-- 
   UNLESS EXECUTA SE A CONDIÇÃO FOR FALSE 
   @unless ($fornecedores[0]['status'] == 'S')
   Fornecedor Inativo. UNLESS
   @endunless 
 
   @if (count($fornecedores) > 0 && count($fornecedores) < 10)
   <h3>Existem alguns fornecedores cadastrados</h3>
   @elseif(count($fornecedores) > 10)
   <h3>Existem vários fornecedores cadastrados</h3>
   @else
   <h3>Ainda não existem fornecedores cadastrados</h3>
   @endif 
--}}