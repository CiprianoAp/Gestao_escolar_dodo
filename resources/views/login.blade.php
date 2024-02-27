@extends('derivar')


@section('conteudo')

<div class="w-full flex justify-center h-svh items-center bg-blue-100">
    <form action="{{ route('admin.entrar') }}" class="cursor-pointer pt-10 shadow-md border flex-col justify-center px-4 py-2 h-1/2 text-black bg-white   space-y-8">
        @csrf
        <h1 class="text-center text-3xl uppercase text-blue-300">Painel Administrador</h1>
        <div class="flex-col justify-center space-y-9 text-black">
            <input class="w-full p-2 border-blue-300 border-2 rounded-md" type="text" name="name" placeholder="Nome:">
            <input class="w-full p-2 border-blue-300 border-2 rounded-md" type="password" name="senha" placeholder="Senha:">
        </div>
        <button class="py-2 px-4 bg-blue-300 rounded-sm w-full text-white">Entrar</button>
    </form>
</div>

@endsection()
