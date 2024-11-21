@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Professor</title>
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
            background-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #17a2b8;
        }

        .btn-secondary:hover {
            background-color: #138496;
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
        footer {
            background-color: #ffffff;
            padding: 30px 0;
            margin-top: 40px;
            text-align: center;
            box-shadow: 0 -6px 12px rgba(0, 0, 0, 0.1);
        }

        footer h3 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 20px;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin: 10px 0;
        }

        footer ul li a {
            font-size: 1.1em;
            color: #007bff;
            text-decoration: none;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="dashboard-header">
            <h1>Bem-vindo, Professor!</h1>
            <p>Aqui você pode aprovar os projetos enviados pelos alunos.</p>
        </div>

        <div class="dashboard-introduction">
            <p>Gerencie os projetos pendentes e acompanhe aqueles que já foram aprovados. Explore as opções disponíveis
                abaixo!</p>
            <img class="dashboard-image"   src="{{ asset('storage/dashprof.png') }}" alt="Ilustração representativa">
        </div>

        <div class="card-container">
            <div class="card">
                <h2>Ver Projetos Pendentes</h2>
                <p>Avalie e aprove os projetos enviados pelos alunos.</p>
                <a href="{{ route('projects.approve') }}" class="btn btn-primary">Ver Projetos Pendentes</a>
            </div>

            <div class="card">
                <h2>Projetos Aprovados</h2>
                <p>Visualize a lista de projetos que já foram aprovados.</p>
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Ver Projetos Aprovados</a>
            </div>
        </div>

        <div class="scrollable-area">
            <h4>Informações Adicionais</h4>
            <p>Este espaço pode ser usado para fornecer atualizações importantes ou notas para os professores.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus, sapien eu venenatis vestibulum,
                orci sapien scelerisque justo, ac condimentum lorem felis vel eros. Integer feugiat fringilla est, ac
                aliquet felis vulputate ac. Sed sagittis mi et nunc elementum, eget aliquam eros gravida.</p>
        </div>
    </div>


</body>

</html>
@endsection