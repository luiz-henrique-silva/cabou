

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .container > h1{
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 8px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 1rem;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>


<body>
    <div class="container">
        <h1>{{ $project->title }}</h1>
        @if ($project->image)
            <img src="{{ asset($project->image) }}" alt="Imagem do projeto">
        @endif
        <p><strong>Descrição: </strong>{{ $project->description }}</p>
        <p><strong>Início:</strong> {{ $project->data_inicio }}</p>
        <p><strong>Conclusão:</strong> {{ $project->data_final }}</p>
        <p><strong>Link GitHub: </strong>{{ $project->link_github }}</p>
        <p><strong>Integrantes:</strong> {{ $project->integrantes }}</p>
        
        <a href="{{ url('/') }}">Voltar para a página inicial</a>
    </div>
</body>

</html>
