<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catálogo de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @can('create', App\Models\Produto::class)
                        <div class="mb-6">
                            <a href="{{ route('produtos.create') }}"> 
                                <x-primary-button>
                                    + Cadastrar Produto
                                </x-primary-button> 
                            </a>
                        </div>
                    @endcan

                    <div class="space-y-4">
                        @foreach ( $produtos as $produto )
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <p class="font-medium">Item: <span class="font-normal">{{ $produto->nome }}</span></p>
                                <a href="{{ route('produtos.show', $produto->id) }}">
                                    <x-secondary-button>
                                        Ver Detalhes
                                    </x-secondary-button>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>