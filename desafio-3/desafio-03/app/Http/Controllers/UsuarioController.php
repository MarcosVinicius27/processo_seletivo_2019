<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        $usuario = Usuario::all();
        $total = Usuario::all()->count();
        return view('list-usuario', compact('usuario', 'total'));
    }

    public function create() {
        return view('include-usuario');
    }

    public function store(Request $request) {
        $usuario = new Usuario;
        $usuario->name =  $request->name;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->save();
        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso!');
    }

//     public function show($id) {
//         //
//     }

    public function edit($id) {
        $usuario = Usuario::findOrFail($id);
        return view('alter-usuario', compact('usuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::findOrFail($id); 
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->save();
        return redirect()->route('product.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($id) {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    }

 }
