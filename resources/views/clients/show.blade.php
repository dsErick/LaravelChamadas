<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Detalhes do cliente {{ $client->name }}</h1>

                    <a href="{{ route('clients.index') }}" class="text-blue-600 hover:underline">Voltar</a>

                    <p>Name - {{ $client->name }}</p>
                    <p>Lastname - {{ $client->lastname }}</p>
                    <p>Cpf - {{ $client->cpf }}</p>
                    <p>Cnpj - {{ $client->cnpj }}</p>
                    <p>Email - {{ $client->email }}</p>

                    <a href="{{ route('clients.edit', $client) }}" class="text-blue-600 hover:underline mt-6">
                        Editar
                    </a>

                    <form action="{{ route('clients.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-blue-600 hover:underline">
                            Remover
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
