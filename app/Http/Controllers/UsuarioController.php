<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    public function register_form()
    {
        $tiposUsuarios = TipoUsuario::all();
        return view('register', compact('tiposUsuarios'));
    }

    public function iniciar_sesion()
    {
        return view('login');
    }

    public function user_register(Request $request)
    {
        $data = $request->validate([
            'tipo_id' => ['required'],
            'name' => ['required','string'],
            'surname' => ['string','nullable'],
            'email' => 'required|email|unique:usuarios,email',
            'password' => ['required','min:4','string'],
            'bio' => ['required','max:255','nullable'],
            'contact_info' => ['required','nullable','string'],
        ]);

        $data['password'] = Hash::make($data['password']); // Encripta la contraseña

        // dd($request);

        $user = Usuario::create($data); // Crea el usuario

        return redirect()->route('login_form'); // Redirige a la página de perfil
    }

}
