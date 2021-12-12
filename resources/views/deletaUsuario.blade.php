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
           Excluir usuário
        </header>

        <main class="max-w-2xl mx-auto shadow-md rounded-b-x1 bg-white divide-y-2">
            
            <p class="px-7 font-bold text-3xl text-red-600">Deseja realmente deletar o usuario abaixo:</p>

            <form class="flex flex-col px-8" action="{{ route('users.destroy', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <label for="nome" class="mt-4 font-bold">Nome:</label>
                <p class="font-semibold text-gray-400">{{$user->nome}}</p>

                <label for="nome" class="mt-4 font-bold">Usuario:</label>
                <p class="font-semibold text-gray-400" for="usuario">{{$user->usuario}}</p>

                <label for="nome" class="mt-4 font-bold">Email:</label>
                <p class="font-semibold text-gray-400" for="email">{{$user->email}}</p>
                

                <label for="nome" class="mt-4 font-bold" for="nascimento">Nascimento:</label>
                <p class="font-semibold text-gray-400">{{$user->nascimento}}</p>

                <label for="nome" class="mt-4 font-bold" for="senha" >Senha:</label>
                <p class="font-semibold text-gray-400">{{$user->senha}}</p>
                
                

                <div class="self-center my-8">
                    <button class="bg-red-500 rounded-md text-white font-semibold p-2" type="submit">Confirmar</button>
                    <a class="bg-blue-500 rounded-md text-white font-semibold p-2" href="{{ route('users.index') }}">Cancelar</a>
                </div>


            </form>
        </main>
        
    </body>
</html>
