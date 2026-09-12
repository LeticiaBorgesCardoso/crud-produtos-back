<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes: {{ $produto->nome }}</title>
</head>
<body>
    <h2>Item: {{ $produto->nome }}</h2>
    <p><strong>Valor:</strong> R$ {{ $produto->preco }}</p>
    <p><strong>Estoque disponível:</strong> {{ $produto->quantidade }}</p>
    <p><strong>Setor / Categoria:</strong> {{ $produto->categoria->nome }}</p>

    @can('update', $produto)
        <a href="{{ route('produtos.edit', $produto) }}">
            <x-secondary-button>
                Editar Dados
            </x-secondary-button>
        </a>
    @endcan

    @can('delete', $produto)
        <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="margin-top: 10px;">
            @csrf
            @method('DELETE')

            <x-danger-button type="submit">Excluir Registro</x-danger-button>
        </form>
    @endcan

</body>
</html>