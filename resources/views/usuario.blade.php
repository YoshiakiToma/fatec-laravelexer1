<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA=Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>TEI - Listagem Usuários</title>
    </head>
    <body>
        <header class="font-bold text-center text-4xl shadow-lg py-4">
            Lista de usuários
                <a class="text-sm bg-green-500 rounded-md p-2 text-white" href="{{ route('users.create') }}">Novo</a>
        </header>

        <main class="max-w-2xl mx-auto shadow-md rounded-b-x1 bg-white divide-y-2">
            @foreach ($listagemUsuarios as $usuario)
            <div class="grid grid-cols-2 p-3 divid-x-2">
                <div class="text-center font-bold">{{ $usuario->nome }}</div>
                <div class="px-3">
                    <a class="bg-blue-500 rounded-md p-1 text-white" href="{{ route('users.edit', $usuario->id) }}"> Editar</a>
                    <a class="bg-red-500 rounded-md p-1 text-white" href="{{ route('users.show', $usuario->id) }}}"> Excluit</a>
                </div>
            </div>
            @endforeach
        </main>
        
    </body>
</html>
