@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações Pendentes</title>
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
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }

        .empty-message {
            text-align: center;
            font-size: 1.2em;
            color: #777;
            margin-top: 40px;
        }

        .solicitations-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .solicitation-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .solicitation-card:hover {
            transform: translateY(-5px);
        }

        .solicitation-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }

        .solicitation-description {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 20px;
        }

        .approve-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .approve-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .desapprove-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            background-color: crimson;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        #img {
            width: 100%;

        }

        .desapprove-btn:hover {
            background-color: red;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Solicitações Pendentes</h1>

        @if ($solicitations->isEmpty())
            <p class="empty-message">Não há solicitações pendentes.</p>
        @else
            <div class="solicitations-list">
                @foreach ($solicitations as $solicitation)
                    
                    <div class="solicitation-card">
                        @if ($solicitation->image)
                        <img id="img" src="{{ asset($solicitation->image) }}" alt="{{ $solicitation->title }}">
                    @endif
                        <h2 class="solicitation-title">{{ $solicitation->title }}</h2>
                        <p class="solicitation-description">{{ $solicitation->description }}</p>
                        <form action="{{ route('solicitations.approve', $solicitation) }}" method="POST">
                            @csrf
                            <button type="submit" class="approve-btn">Aprovar</button>
                            <button type="" class="desapprove-btn">Desaprovar</button>
                        </form>
                    </div>
                @endforeach

            </div>
        @endif
    </div>
</body>

</html>
@endsection