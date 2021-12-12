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
           Cadastrar novo usuário
        </header>

        <main class="max-w-2xl mx-auto shadow-md rounded-b-x1 bg-white divide-y-2">
            
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $erro)
                            <li>{{$erro}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form class="flex flex-col px-8" action="{{ route('users.store') }}" method="POST" data-parsley-validate="">
                @csrf

                <label for="nome" class="mt-4 font-bold">Nome:</label>
                <input class="border-2 rounded-md" type="text" value="{{ old('nome') }}" id="nome" name="nome" 
                    data-parsley-required="true" 
                    data-parsley-minlength="3" 
                    data-parsley-maxlength="40" 
                    data-parsley-required-message="O campo nome é obrigatório"
                    data-parsley-minlength-message="Seu nome precisa ter no mínimo 3 letras"
                    data-parsley-maxlength-message="Seu nome precisa ter no máximo 40 letras">

                <label for="nome" class="mt-4 font-bold">Usuario:</label>
                <input class="border-2 rounded-md" type="text" id="usuario" value="{{ old('usuario') }}" name="usuario"
                    data-parsley-required="true" 
                    data-parsley-minlength="3" 
                    data-parsley-maxlength="40" 
                    data-parsley-required-message="O campo usuario é obrigatório"
                    data-parsley-minlength-message="Seu usuario precisa ter no mínimo 3 letras"
                    data-parsley-maxlength-message="Seu usuario precisa ter no máximo 40 letras">

                <label for="nome" class="mt-4 font-bold">Email:</label>
                <input class="border-2 rounded-md" type="text" id="email" value="{{ old('email') }}" name="email"
                    data-parsley-required="true" 
                    data-parsley-minlength="3" 
                    data-parsley-maxlength="40" 
                    data-parsley-required-message="O campo email é obrigatório"
                    data-parsley-minlength-message="Seu email precisa ter no mínimo 3 letras"
                    data-parsley-maxlength-message="Seu email precisa ter no máximo 40 letras">

                <label for="nome" class="mt-4 font-bold">Nascimento:</label>
                <input class="border-2 rounded-md" type="text" id="nascimento" value="{{ old('nascimento') }}" name="nascimento">

                <label for="nome" class="mt-4 font-bold">Senha:</label>
                <input type="password" class="border-2 rounded-md" type="text" value="{{ old('senha') }}" id="senha" name="senha" 
                    data-parsley-required="true" 
                    data-parsley-minlength="3" 
                    data-parsley-maxlength="40" 
                    data-parsley-required-message="O campo email é obrigatório"
                    data-parsley-minlength-message="Sua senha precisa ter no mínimo 3 letras"
                    data-parsley-maxlength-message="Sua senha precisa ter no máximo 40 letras">
                

                <div class="self-center my-8">
                    <button class="bg-blue-500 rounded-md text-white font-semibold p-2" type="submit">Salvar</button>
                    <a class="bg-red-500 rounded-md text-white font-semibold p-2" href="{{ route('users.index') }}">Cancelar</a>
                </div>


            </form>
        </main>
        
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
