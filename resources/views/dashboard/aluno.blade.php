@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Aluno</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
        }

        .dashboard-header h1 {
            font-size: 2.5em;
            color: #333;
        }

        .dashboard-header p {
            font-size: 1.1em;
            color: #666;
        }

        .dashboard-introduction p {
            font-size: 1.2em;
            text-align: center;
            color: #555;
            margin: 20px 0;
        }

        .dashboard-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #333;
        }

        .card p {
            font-size: 1.1em;
            margin-bottom: 20px;
            color: #777;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            font-size: 1em;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            transform: scale(1.05);
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }

        .scrollable-area {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            margin-top: 40px;
            max-height: 300px;
            overflow-y: auto;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .scrollable-area h4 {
            font-size: 1.6em;
            margin-bottom: 20px;
            color: #333;
        }

        .scrollable-area p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        /* Footer - Seções Recomendadas */
        
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <h1>Bem-vindo, Aluno!</h1>
            <p>Gerencie seus projetos e acompanhe o progresso das suas submissões.</p>
        </div>

        <div class="dashboard-introduction">
            <p>Aqui você pode enviar seus projetos e visualizar os aprovados. Fique à vontade para explorar os recursos disponíveis!</p>
            <img src="{{ asset('storage/dashaluno.png') }}" alt="Imagem de dashboard" class="dashboard-image">
        </div>

        <div class="card-container">
            <div class="card">
                <h2>Envie seu Projeto</h2>
                <p>Submeta um novo projeto para avaliação do professor.</p>
                <a href="{{ route('projects.create') }}" class="btn btn-primary">Enviar Projeto</a>
            </div>

            <div class="card">
                <h2>Ver Projetos Aprovados</h2>
                <p>Confira os projetos que já foram aprovados e estão aguardando para a próxima etapa.</p>
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Ver Projetos Aprovados</a>
            </div>

            

            <div class="card">
                <h2>Notícias Importantes</h2>
                <p>Fique por dentro das últimas novidades e prazos do sistema de repositórios escolares.</p>
                <a href="#" class="btn btn-warning">Ver Notícias</a>
            </div>
        </div>

        <div class="scrollable-area">
            <h4>Exploração Adicional</h4>
            <p>Este conteúdo pode ser rolado para que você possa explorar mais informações e recursos sobre a plataforma. Estamos aqui para ajudá-lo em cada etapa do seu aprendizado. Continue navegando para encontrar mais opções!</p>
            
        </div>
    </div>

    
</body>
</html>
@endsection
