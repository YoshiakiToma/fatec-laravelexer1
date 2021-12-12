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
           Alterar usuário
        </header>

        <main class="max-w-2xl mx-auto shadow-md rounded-b-x1 bg-white divide-y-2">
            <form class="flex flex-col px-8" action="{{ route('users.update', $user->id) }}" method="POST">
                @method('PUT')
                @csrf

                <label for="nome" class="mt-4 font-bold">Nome:</label>
                <input class="border-2 rounded-md" type="text" id="nome" value="{{$user->nome}}" name="nome">

                <label for="nome" class="mt-4 font-bold">Usuario:</label>
                <input class="border-2 rounded-md" type="text" id="usuario" value="{{$user->usuario}}" name="usuario">

                <label for="nome" class="mt-4 font-bold">Email:</label>
                <input class="border-2 rounded-md" type="text" id="email" value="{{$user->email}}" name="email">

                <label for="nome" class="mt-4 font-bold">Nascimento:</label>
                <input class="border-2 rounded-md" type="text" id="nascimento" value="{{$user->nascimento}}" name="nascimento">

                <label for="nome" class="mt-4 font-bold">Senha:</label>
                <input type="password" class="border-2 rounded-md" type="text" value="{{$user->senha}}" id="senha" name="senha">
                

                <div class="self-center my-8">
                    <button class="bg-blue-500 rounded-md text-white font-semibold p-2" type="submit">Salvar</button>
                    <a class="bg-red-500 rounded-md text-white font-semibold p-2" href="{{ route('users.index') }}">Cancelar</a>
                </div>


            </form>
        </main>
        
    </body>
</html>
