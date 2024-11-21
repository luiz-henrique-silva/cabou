@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,442;1,442&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            background-image: url({{ asset('storage/background.svg') }});
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Nunito", serif;
        }

        .caixa-principal {
            margin-top: 25%;
            margin-left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: white;
            box-shadow: 5px 5px 20px 5px rgba(0, 0, 0, 0.6);
            padding: 30px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .logo {
            width: 150px;
            margin-bottom: 20px;
            margin-left: -230px;
        }

        input, select {
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            width: 350px;
            padding: 5px 0;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input:focus, select:focus {
            border-bottom: 1px solid #007BFF;
            transition: border-color 0.3s ease;
        }

        button {
            color: white;
            background-color: #0B67B3;
            border: none;
            padding: 10px 20px;
            font-size: 15px;
            margin-top: 20px;
            cursor: pointer;
            margin-left: 250px;
        }

        button:hover {
            background-color: #007BFF;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 25px;
        }

        label {
            font-size: 14px;
            text-align: left;
            width: 100%;
        }

        span {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="caixa-principal">
        <img class="logo" src="{{ asset('storage/logo_etec_cor.png') }}" alt="Logo">
        <h2>Entrar</h2>
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Digite seu email" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="type">Tipo de Usuário:</label>
                <select name="type" id="type" required>
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                </select>
                @error('type')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
@endsection
