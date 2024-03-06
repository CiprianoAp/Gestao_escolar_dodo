@extends('derivar')


@section('conteudo')


<div class="w-full h-screen flex justify-center items-center">
    <form action="{{ route('cadastrar.curso') }}" method="GET">
        @csrf

        <input type="text" name="Curso" id="" placeholder="Cadastrar Curso" class="w-full p-2 border-blue-300 border-2">
        <input type="text" name="Duracao" id="" placeholder="Cadastrar Duraçãodo curso" class="w-full p-2 border-blue-300 border-2">
        <div class="pb-5">
            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Cadastrar</button>
       </div>
    </form>
</div>
@endsection()
