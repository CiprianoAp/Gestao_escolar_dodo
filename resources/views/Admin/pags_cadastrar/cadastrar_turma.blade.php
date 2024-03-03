@extends('derivar')


@section('conteudo')


<div class="w-full h-screen flex justify-center items-center">
    <form action="{{ route('cadastrar.turma') }}" method="GET">
        @csrf
        <select class="w-full p-2 border-blue-300 border-2"  name="Periodo" id="">
            @foreach ($turma as $turmas)
                <option>{{ $turmas->Periodo }}</option>
            @endforeach
        </select >
        <input type="text" name="Turma" id="" placeholder="Cadastrar Turma" class="w-full p-2 border-blue-300 border-2">
        <div class="pb-5">
            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Cadastrar</button>
       </div>
    </form>
</div>
@endsection()
