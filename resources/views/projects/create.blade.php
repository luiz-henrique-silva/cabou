<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,442;1,442&display=swap" rel="stylesheet">
    <link href="{{ asset('css/createproject.css') }}" rel="stylesheet">
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

        .maindiv {
            margin-top: 5%;
            margin-left: 50%;
            transform: translate(-50%, 0);
            width: 900px;
            background-color: white;
            box-shadow: 5px 5px 20px 5px rgba(0, 0, 0, 0.6);
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        input,
        select,
        textarea {
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            width: 100%;
            max-width: 400px;
            padding: 10px 0;
            font-size: 16px;
            margin-bottom: 15px;
            background-color: transparent;
        }

        input:focus,
        select:focus,
        textarea:focus {
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
            width: 100%;
            max-width: 200px;
            display: block;
            margin: 20px auto 0;
            transition: background 0.3s ease;
            border-radius: 20px;
        }

        button:hover {
            background-color: #007BFF;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            text-align: left;
            width: 100%;
            margin-bottom: 5px;
        }

        .flex-container {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .divesquerdola,
        .divdireitola {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
            width: 100%;
        }

        textarea.form-control {
            resize: vertical;
            height: 80px;
        }

        button[type="submit"],
        button.btn-primary {
            background: linear-gradient(90deg, #1B91B2, #59DEC6);
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 20px;
            width: 100%;
            max-width: 200px;
            margin: 20px auto 0;
            display: block;
            transition: background 0.3s ease;
            cursor: pointer;
        }

        button[type="submit"]:hover,
        button.btn-primary:hover {
            background: linear-gradient(90deg, #59DEC6, #1B91B2);
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="maindiv">
        <h1>Enviar Projeto</h1>
        <div class="flex-container">
            <!-- Divisão em duas colunas -->
            <div class="divesquerdola">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do Projeto:</label>
                        <input type="text" class="form-control" name="title" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" name="description" id="descricao" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="data_inicio">Data de Início:</label>
                        <input type="date" class="form-control" name="data_inicio" id="data_inicio">
                    </div>
                    <div class="form-group">
                        <label for="data_final">Data Final:</label>
                        <input type="date" class="form-control" name="data_final" id="data_final">
                    </div>
                    <div class="form-group full-width">
                        <label for="integrantes">Integrantes:</label>
                        <textarea class="form-control" name="integrantes" id="integrantes"></textarea>
                    </div>
            </div>
            <div class="divdireitola">
                <div class="form-group">
                    <label for="curso_id">Curso:</label>
                    <select class="form-control" name="department" id="department" onchange="fetchProfessors()">
                        @foreach ($professors as $professor)
                            <option value="{{ $professor->department }}">
                                {{ $professor->department ?? 'Departamento não especificado' }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="professor_orientador_id">Professor Orientador:</label>
                    <select name="professor_id" id="professor_id" class="form-control">
                        @foreach($professors as $professor)
                            <option value="{{ $professor->id }}">
                                {{ $professor->name }} - {{ $professor->department ?? 'Departamento não especificado' }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="link_github">Link do GitHub:</label>
                    <input type="url" class="form-control" name="link_github" id="link_github">
                </div>
                <div class="form-group">
                    <label for="image">Imagem do Projeto (16:9)</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Projeto</button>

        <!-- Exibição de mensagens de erro ou sucesso -->
 @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        </form>
    </div>

    <script>
        function fetchProfessors() {
            const departmentId = document.getElementById('department').value;

            fetch(`/api/professores?course_id=${departmentId}`)
                .then(response => response.json())
                .then(data => {
                    const professorSelect = document.getElementById('professor_id');
                    professorSelect.innerHTML = ''; // Limpa opções anteriores

                    data.forEach(professor => {
                        const option = document.createElement('option');
                        option.value = professor.id;
                        option.textContent = professor.name;
                        professorSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Erro ao carregar professores:', error));
        }
    </script>

</body>

</html>