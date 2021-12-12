<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listagemUsuarios = User::all();

        return view('usuario', compact('listagemUsuarios'));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $regras = [
            'nome' => 'required|min:3|max:40',
            'usuario' => 'required|min:3|max:40',
            'email' => 'required|min:3|max:40',
            'senha'=> 'required|min:3|max:40'
        ];

        $mensagens = [
            'nome.required' => 'Digite seu nome',
            'nome.min' => 'Seu nome precisa ter no máximo 3 letras',
            'nome.max' => 'Seu nome precisa ter no máximo 40 letras',

            'email.required' => 'Digite seu email',
            'email.min' => 'Seu email precisa ter no máximo 3 letras',
            'email.max' => 'Seu email precisa ter no máximo 40 letras',
            
            'usuario.required' => 'Digite seu usuario',
            'usuario.min' => 'Seu usuario precisa ter no máximo 3 letras',
            'usuario.max' => 'Seu usuario precisa ter no máximo 40 letras',

            'senha.required' => 'Digite seu senha',
            'senha.min' => 'Seu senha precisa ter no máximo 3 letras',
            'senha.max' => 'Seu senha precisa ter no máximo 40 letras',
        ];

        $request->validate($regras, $mensagens);
        
        $usuario = new User();

        $usuario->nome = $request->input('nome');
        $usuario->usuario = $request->input('usuario');
        $usuario->nascimento = $request->input('nascimento');
        $usuario->email = $request->input('email');
        $usuario->senha = Hash::make($request->input('senha'));

        $usuario->save();

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('deletaUsuario', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('alteraUsuario', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->nome = $request->input('nome');
        $user->usuario = $request->input('usuario');
        $user->nascimento = $request->input('nascimento');
        $user->email = $request->input('email');
        $user->senha = Hash::make($request->input('senha'));

        $user->save();

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirec(route('users.index'));
    }
}
