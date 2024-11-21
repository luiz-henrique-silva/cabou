@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.projects-container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.projects-container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.project-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.project-card:hover {
    transform: scale(1.02);
}

.project-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.project-info {
    padding: 15px;
}

.project-info h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #007bff;
}

.project-info p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
}

.project-info strong {
    color: #333;
}

    </style>
</head>
<body>
    

@section('content')
<div class="projects-container">
    <h1>Projetos Aprovados</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="projects-grid">
        @foreach($projects as $project)
            <div class="project-card">
                @if ($project->image)
                    <img src="{{ asset($project->image) }}" alt="Imagem do projeto">
                @endif
                <div class="project-info">
                    <h2>{{ $project->title }}</h2>
                    <p><strong>Descrição:</strong>{{ $project->description }}</p>
                    <p><strong>Integrantes:</strong> {{ $project->integrantes }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
</body>
</html>