<h1>Fornecedores</h1>

{{--- Comentarios usando o Blade ---}}


@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
    <p>
            Fornecedor atual: {{ $loop->iteration }}
            <br>
            Fornecedores: {{ $fornecedor['nome'] }}
            <br>
            Status: {{ $fornecedor['status'] }}
            <br>
            CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
            <br>
            Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        </p>
        <hr>
        @if($loop->last)
            Total de Fornecedores: {{ loop->count }}
        @endif
        @empty
        <p>Nenhum fornecedor encontrado</p>
    @endforelse
@endisset


    