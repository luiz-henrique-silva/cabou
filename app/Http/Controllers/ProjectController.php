<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Solicitation;
use App\Models\Course;
use App\Models\Materia; // Certifique-se de importar o modelo Solicitation
use App\Models\Professor;
use App\Models\User;

class ProjectController extends Controller
{
    
    //by id
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
    

    public function approveIndex() {
        $solicitations = Solicitation::where('status', 'pendente')->get(); // Busca as solicitações pendentes
        return view('projects.approve', compact('solicitations')); // Passa as solicitações para a view
    }

    // Exibir todos os projetos aprovados
    public function index() {
        $projects = Project::where('status', 'aprovado')->get();
        return view('projects.index', compact('projects'));
    }

    // Exibir formulário de envio de projeto (somente para alunos)
  

//     public function create()
// {
//     $courses = Course::with('professor')->get(); // Carrega o professor associado ao curso
//     $professors = User::where('type', 'professor')->get(); // Filtra apenas os professores

//     return view('projects.create', compact('courses', 'professors'));
// }

// public function create()
// {
//     $departments = Department::with('professor')->get(); // Carrega o professor associado ao departamento
//     $professors = User::where('type', 'professor')->get(); // Filtra apenas os professores

//     return view('projects.create', compact('departments', 'professors'));
// }
public function create()
{
    $professors = User::where('type', 'professor')->get(); // Filtra apenas os professores

    return view('projects.create', compact('professors'));
}



    

    // Salvar solicitação de projeto
    public function store(Request $request)
    {
        // Validação dos campos do formulário
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:ratio=16/9',
            ],
            [
                'image.required' => 'Uma imagem é obrigatória.',
                'image.image' => 'O arquivo enviado deve ser uma imagem.',
                'image.mimes' => 'Imagem não suportada. Formatos aceitos: jpeg, png, jpg ou gif.',
                'image.max' => 'A imagem não pode exceder 2 MB.',
                'image.dimensions' => 'A imagem deve ter a proporção 16:9.',
            ]
        );
   
        
   
        // Salvar no banco
       
    
        // Verifica se o arquivo de imagem foi enviado e é válido
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            
            // Gerar nome único para a imagem
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;
            
            // Mover a imagem para o diretório público
            $requestImage->move(public_path('img/events'), $imageName);
            
            // Salvar o nome da imagem no banco de dados
            $imageUrl = 'img/events/' . $imageName;
        }
    
        // Criação da solicitação no banco de dados
        Solicitation::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageUrl, // Usando o novo caminho da imagem
            'integrantes' => $request->integrantes, // Adiciona os integrantes
            'data_inicio' => $request->data_inicio,
            'data_final' => $request->data_final,  
            'link_github' => $request->link_github,
            'user_id' => auth()->id(),
            'status' => 'pendente',
        ]);
    
        // Redireciona com sucesso
        return redirect()->route('projects.index')->with('success', 'Solicitação enviada com sucesso!');
    }
    
    public function welcome() {
        $projects = Project::where('status', 'aprovado')->get();
        return view('welcome', compact('projects'));
    }
    
    // Exibir solicitações de projetos pendentes (somente para professores)
    // public function approveIndex() {
    //     $projects = Project::where('status', 'pendente')->get();
    //     return view('projects.approve', compact('projects'));
    // }
    
    

    // Aprovar projeto (somente para professores)
    public function approve(Solicitation $solicitation)
{
    $solicitation->update(['status' => 'aprovado']);

    Project::create([
        'image' => $solicitation->image,
        'title' => $solicitation->title,
        'description' => $solicitation->description,
        'data_inicio' => $solicitation->data_inicio,
        'data_final' => $solicitation->data_final,
        'integrantes' => $solicitation->integrantes, // Incluído
        'curso_id' => $solicitation->curso_id,
        'professor_orientador_id' => $solicitation->professor_orientador_id,
        'link_github' => $solicitation->link_github,
        'status' => 'aprovado',
        'documento' => $solicitation->documento,
        'user_id' => $solicitation->user_id,
        'materia_id' => $solicitation->materia_id ?? null,
    ]);

    return redirect()->route('projects.index')->with('success', 'Solicitação aprovada e projeto criado com sucesso!');
}



    public function getProfessorsByCourse(Request $request)
    {
        $courseId = $request->input('course_id');
        $professors = Professor::where('course_id', $courseId)->get(); // Supondo que tenha um relacionamento definido

        return response()->json($professors);
    }
    
}
