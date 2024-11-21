<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Modelo User
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Exibir o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Processar o registro
    public function register(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|in:aluno,professor', // Validação para aluno ou professor
            'department' => 'nullable|string', // Adiciona department se type for professor
        ]);

        // Criar o usuário usando o método create da classe
        $user = $this->create($request->all());

        // Autenticar o usuário e redirecionar
        auth()->login($user);

        return redirect()->route('dashboard'); // Redireciona para o dashboard
    }

    // Método para criar o usuário no banco de dados
    protected function create(array $data)
    {
        // Cria o usuário e define o tipo
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
        ]);

        // Se o usuário for professor, define o departamento
        if ($data['type'] === 'professor') {
            $user->department = $data['department']; // Certifique-se de que a coluna department existe no modelo User
            $user->save();
        }

        return $user;
    }
}
