@extends('layouts.app')

@section('content')
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,442;1,442&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            overflow: hidden;
            background-image: url({{ asset('storage/background.svg') }});
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Nunito", serif;
        }
        .caixa-principal{
            margin-top: 25%; /* Move para o meio verticalmente */
            margin-left: 50%; /* Move para o meio horizontalmente */
            transform: translate(-50%, -50%); 
            width: 400px;
            background-color: white;
            box-shadow: 5px 5px 20px 5px rgba(0,0,0,0.60);
            padding: 30px;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
            width: 100%;
            
            
        }
        .label-input{
            display: flex;
            flex-direction: column;
        }
        button{
            color: white;
            background-color: #0B67B3;
            border: none;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            margin-top: 20px;
            font-size: 15px;
            margin-left: 260px;
        }
        button:hover{
            background-color: #007BFF;
            cursor: pointer;
        }
        .logo{
            
            width: 150px;
        }
        input {
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            width: 350px;
            padding: 5px 0;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input:focus {
            border-bottom: 1px solid #007BFF; /* Cor ao focar */
            transition: border-color 0.3s ease; /* Transição suave */
        }
        p{
            margin-bottom: 15px;
            font-size: 25px;
        }
    </style>
</head>
<body>
<!-- <img src="{{ asset('storage/download.svg') }}" alt="Logo"> -->
    

<div class="caixa-principal">
        <img class="logo" src="{{ asset('storage/logo_etec_cor.png') }}" alt="Logo">
        

        <form action="{{ route('register') }}" method="POST">
            @csrf
<p>Registrar</p>
            <div class="label-input">
                <input placeholder="Nome" type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="label-input">
                
                <input placeholder="Email" type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="label-input">
                
                <input placeholder="Senha" type="password" id="password" name="password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="label-input">
                <input placeholder="Confirmar Senha" type="password" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Select para escolher entre Aluno ou Professor -->
            <div class="label-input">
                <label for="type">Tipo de Usuário:</label>
                <select name="type" id="type" required onchange="toggleDepartment()">
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                </select>
                @error('type')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Se o tipo de usuário for professor, exibe a seleção de departamento -->
       
                <label for="department">Departamento:</label>
                <select name="department" id="department">
                    <option value="ds">Desenvolvimento de Sistemas</option>
                    <option value="log">Logística</option>
                    <option value="adm">Administração</option>
                </select>
                @error('department')
                    <span>{{ $message }}</span>
                @enderror
                <button type="submit">Registrar</button>

            
        </form>
    </div>

        <script>
            function toggleDepartment() {
                var userType = document.getElementById('type').value;
                var departmentContainer = document.getElementById('department-container');

                // Mostra ou esconde o campo de departamento baseado no tipo de usuário
                if (userType === 'professor') {
                    departmentContainer.style.display = 'block';
                } else {
                    departmentContainer.style.display = 'none';
                }
            }
        </script>
        </body>
</html>
@endsection
