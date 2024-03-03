<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;
use App\Models\fomrcao_proff;
use App\Models\disciplinas;
use App\Models\Curso;
use App\Models\Ano_letivo;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Inscricoes;
use App\Models\Disciplina_curso;
use App\Models\Prof_disciplina;
use Illuminate\Support\Facades\DB;

class ControllerProff extends Controller
{

    //Pagina inicial para Admin
    public function login(){

        return view('Admin.login');
    }


    //fazer Login para o Admin
    public function entrar(Request $request, professor $professor,){

       $dados = DB::table('admins')
            ->where('Nome', $request->name)
            ->where('Senha', $request->senha)
            ->first();
        if ($dados) {

           if( (($aluno = Aluno::all()) && ($turma = Turma::all())  && ($ano_letivo = Ano_letivo::all()) && $dados_prof = $professor::all()) && ($Disciplinas = disciplinas::all()) && ($cursos = Curso::all()))
           {
            //dd($cursos->all());
                return view('Admin.principal',compact('dados','dados_prof','Disciplinas','cursos','turma','ano_letivo' ,'aluno'));
           }


        } else {

            dd('Senha incorreta');
        }

    }

    //Cadastrar Professor
    public function cadastrar_prof(Request $request, professor $prof)
    {
     // dd($request->nome);
       $dados = $request->validate([
            'Nome' => 'required | string | max:255',
           'Email' => 'required | string | max:255',
           'Telefone' => 'required | string | max:255',
           'Aniversario' => 'required | date',
       ]);


      //dd($dados->nome);
       if($prof->create($dados))
       {
         dd('Cadastrado com sucesso');
       }
    }

    //Cadastrar formação do professor
    public function formacao_p(Request $request,fomrcao_proff $formacao_proff)
    {
     //dd($request->id);

        $dados_prof = $request->validate([
           'professors_id' => 'required | string | max:255',
           'Formacao' => 'required | string | max:255',
           'Local_formacao' => 'required | string | max:255',
       ]);



        $dados_diciplina = $request->validate([
           'professors_id' => 'required',
           'disciplinas_id' => 'required',
       ]);

     //  dd($dados_diciplina);


     // dd($salvarDados_pprof_disciplina);
      // dd($dados);
       if(($formacao_proff->create($dados_prof)) && (Prof_disciplina::create($dados_diciplina)))
       {
         dd('Cadastrado com sucesso');
       }
    }

    //Adicionar disiciplina ao curso

    public function disicipilna_curso(Request $request)
    {

        $dados = $request->validate([
            'disciplinas_id' => 'required',
            'cursos_id' => 'required',
        ]);

        if(Disciplina_curso::create($dados))
        {
            dd('Cadastrado com sucesso');
        }

        dd($request->all());
    }


    //Cadastrar estudante
    public function cadstrar_estudante(Request $request){

        $dados = $request->validate([
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Data' => 'required',
            'Genero' => 'required',
            'Telefone' => 'required',
            'Tel_encarregado' => 'required',
        ]);

       if( Aluno::create($dados))
       {
            dd("Cadastrado com sucesso");
       }
    }

    public function inscrever_estudante(Request $request)
    {
        //dd($request->all());

        $dados = $request->validate([
            'alunos_id' => 'required',
            'ano_letivos_id' => 'required',
            'cursos_id' => 'required',
            'turmas_id' => 'required',
        ]);

        if(Inscricoes::create($dados)){
            dd('Cadastrado com sucesso');
        }

    }

    //Cadastrar disciplina

    public function cadastrar_disciplina(Request $request)
    {

        $dados = $request->validate([
            'Disciplina' => 'required',

        ]);

        if(disciplinas::create($dados))
        {
            dd("Cadastrado com sucesso");
        }
        dd($request->all());
    }

    //Ver disciplina

    public function disciplina()
    {
        return view('Admin.pags_cadastrar.cadastrar_disiciplina');
    }

    public function turma(Request $request)
    {
        $turma = Turma::all();
       return view('Admin.pags_cadastrar.cadastrar_turma',compact('turma'));
    }

    public function turma_cadastrar(Request $request)
    {
        $dados = $request->validate([
            'Turma' => 'required',
            'Periodo' => 'required',

        ]);

        if(turma::create($dados))
        {
            dd("Cadastrado com sucesso");
        }
    }
}
