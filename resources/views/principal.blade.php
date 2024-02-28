@extends('derivar')


@section('conteudo')
    <div>
        <div class="bg-gray-100 font-sans leading-normal tracking-normal">

            <!-- Navbar -->
            <nav class="bg-gray-800 p-4">
                <div class="container mx-auto">
                    <div class="flex items-center justify-between">
                        <div class="text-white">Admin Panel</div>
                        <div class="flex items-center space-x-4">

                            <a href="#" class="text-white py-1 px-4 hover:bg-gray-700 rounded-md"><i class="fa-sharp fa-solid fa-house"></i> Início</a>
                            <!--Menu-->
                            <div class="relative inline-block text-left">
                                <button id="dropdownButton" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-700  rounded-md hover:bg-gray-700 focus:outline-none active:text-gray-800">
                                    <a href="#" class="text-white font-medium"><i class="fa-solid fa-user"></i> {{ $dados->Nome }}</a> <i class="ml-4 fa-solid fa-caret-down text-white"></i>
                                  <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <!-- ... -->
                                  </svg>
                                </button>

                                <div id="dropdownMenu" class="absolute right-0 mt-2 space-y-2 bg-white border border-gray-300 rounded-md shadow-lg hidden p-2">
                                  <!-- Dropdown items -->

                                 <div class="flex w-full items-center  hover:bg-blue-500 hover:text-white">
                                    <i class="fa-sharp fa-solid fa-chart-simple"></i>  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-white">Estatisticas</a>
                                 </div>
                                <div class="flex w-full items-center  hover:bg-blue-500 hover:text-white">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> <a href="{{ route('usuario.login') }}" class="block px-4 py-2 text-sm text-gray-700">Sair </a>
                                </div>
                                </div>
                              </div>

                            <!--Menu-->
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <div class="container mx-auto mt-4 bg-gray-200 select-none">
                <div class="flex ml-0">
                    <!-- Sidebar -->
                    <div class="w-1/4 bg-gray-200 p-4">
                        <ul>
                            <li class="mb-2"><button  onclick="showCadastrar()"  class="text-blue-500">cadastrar professor</button></li>
                            <li class="mb-2"><button onclick="showFormProf()" class="text-blue-500">Adicionar formação ao professor</button></li>
                            <li class="mb-2"><button onclick="showDisicpilnaAocurso()" class="text-blue-500">Adicionar disiciplina ao curso</button></li>
                            <li class="mb-2"><button onclick="showCadastrar_estudantes()" class="text-blue-500">Cadastrar Estudante</button></li>
                            <li class="mb-2"><a href="#" class="text-blue-500">Inscrever ou matricular o estudante</a></li>
                            <li class="mb-2"><a href="#" class="text-blue-500">Cadastrar Curso</a></li>
                            <li class="mb-2"><a href="#" class="text-blue-500">Turma</a></li>
                            <li class="mb-2"><a href="#" class="text-blue-500">Consultas</a></li>
                        </ul>
                    </div>

                    <!-- Main Content -->
                    <div class="w-3/4 p-4 bg-white">
                        <!-- Your content goes here -->
                        <h1 class="text-2xl font-bold mb-4">Painel</h1>
                        <p>O conteúdo do seu painel vai aqui..</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--MODAL CADASTRAR PROFESSOR-->
    <div>
        <div id="Cadastrar_proff" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen  justify-center items-center opacity-0 hidden transition-opacity duration-500">
            <div class="bg-white rounded shadown-md p-8 w-[50%]  gap-5 pb-0 overflow-hidden">
                <div></div>
                <div class="flex-grow">
                   <div class="flex justify-between">
                        <h1 class="font-bold text-lg mb-5 text-gray-700">Cadastrar professore!</h1><button onclick="hideCadastrar()" class=" rounded px-4 py-2  cursor-pointer mb-2 text-red-600">X</button>
                   </div>
                    <form action="{{ route('cadastrar.prof') }}" class="space-y-3" method="GET">
                        @csrf
                        <input type="text" name="Nome" id="" placeholder="Nome" class="w-full p-2 border-blue-300 border-2">
                        <input type="email" name="Email" id="" placeholder="Email" class="w-full p-2 border-blue-300 border-2">
                        <input type="tel" name="Telefone" id="" placeholder="Telefone" class="w-full p-2 border-blue-300 border-2">
                        <div class="flex items-center border-blue-300 border-2">
                            <label class="text-gray-500 ml-3 mr-3" for="">Aniversário</label>
                            <input type="date" name="Aniversario" id="" placeholder="Aniverário" class="w-full p-2">
                        </div>
                       <div class="pb-5">
                            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Cadastrar</button>
                       </div>

                    </form>
                </div>

            </div>


        </div>

    </div>


    <!--MODAL ADICIONAR DISCIPLINA E FORMAÇÃO AO PROFESSOR-->
    <div>
        <div id="add_formacao_prof" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen  justify-center items-center opacity-0 hidden transition-opacity duration-500">
            <div class="bg-white rounded shadown-md p-8 w-[50%]  gap-5 pb-0 overflow-hidden">
                <div></div>
                <div class="flex-grow">
                   <div class="flex justify-between">
                        <h1 class="font-bold text-lg mb-5 text-gray-700">Adicionar disciplina e formação ao professor</h1><button onclick="hideFormProf()" class=" rounded px-4 py-2  cursor-pointer mb-2 text-red-600">X</button>
                   </div>
                    <form action="{{ route('formacao.prof') }}" class="space-y-3" method="GET">
                        @csrf
                        <select class="w-full p-2 border-blue-300 border-2"  name="professors_id" id="">
                            @foreach ($dados_prof as $prof_dados)
                                <option  value="{{ $prof_dados->id }}">{{ $prof_dados->Nome }} Codigo  {{ $prof_dados->id }}</option>
                            @endforeach
                        </select >

                        <select class="w-full p-2 border-blue-300 border-2"  name="disciplinas_id" id="">
                            @foreach ($Disciplinas as $disciplina)
                                <option  value="{{ $disciplina->id }}">{{ $disciplina->Disciplina }}</option>
                            @endforeach
                        </select >

                        <input type="text" name="Formacao" id="" placeholder="Formacao" class="w-full p-2 border-blue-300 border-2">
                        <input type="text" name="Local_formacao" id="" placeholder="Local da formação" class="w-full p-2 border-blue-300 border-2">

                        <div class="pb-5">
                            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Cadastrar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--MODAL ADICIONAR DISCIPLINA AO CURSO-->
    <div>
        <div id="add_disiciplina_curso" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen  justify-center items-center opacity-0 hidden transition-opacity duration-500">
            <div class="bg-white rounded shadown-md p-8 w-[50%]  gap-5 pb-0 overflow-hidden">
                <div></div>
                <div class="flex-grow">
                   <div class="flex justify-between">
                        <h1 class="font-bold text-lg mb-5 text-gray-700">Adicionar disciplina ao curso</h1><button onclick="hideDisicpilnaAocurso()" class=" rounded px-4 py-2  cursor-pointer mb-2 text-red-600">X</button>
                   </div>
                    <form action="{{ route('disicipilna.curso') }}" class="space-y-3" method="GET">
                        @csrf
                        <select class="w-full p-2 border-blue-300 border-2"  name="cursos_id" id="">
                            @foreach ($cursos as $curso)
                                <option  value="{{ $curso->id }}">{{ $curso->Curso }} Duração {{ $curso->Duracao }} anos</option>
                            @endforeach
                        </select >

                        <select class="w-full p-2 border-blue-300 border-2"  name="disciplinas_id" id="">
                            @foreach ($Disciplinas as $disciplina)
                                <option  value="{{ $disciplina->id }}">{{ $disciplina->Disciplina }}</option>
                            @endforeach
                        </select >


                        <div class="pb-5">
                            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Adicionar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!--CADASTRAR ESTUDANTES-->
    <div>
        <div id="Cadastrar_estudantes" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen  justify-center items-center opacity-0 hidden transition-opacity duration-500">
            <div class="bg-white rounded shadown-md p-8 w-[50%]  gap-5 pb-0 overflow-hidden">
                <div></div>
                <div class="flex-grow">
                   <div class="flex justify-between">
                        <h1 class="font-bold text-lg mb-5 text-gray-700">Cadastrar estudante</h1><button onclick="hideCadastrar_estudantes()" class=" rounded px-4 py-2  cursor-pointer mb-2 text-red-600">X</button>
                   </div>
                    <form action="{{ route('cadastrar.estudantes') }}" class="space-y-3" method="GET">
                        @csrf
                        <input type="text" name="Nome" id="" placeholder="Nome" class="w-full p-2 border-blue-300 border-2">
                        <input type="text" name="Sobrenome" id="" placeholder="Local Sobrenome formação" class="w-full p-2 border-blue-300 border-2">
                        <input type="date" name="Data" id="" placeholder="Data de nascimento" class="w-full p-2 border-blue-300 border-2">
                        <input type="text" name="Telefone" id="" placeholder="Telefone" class="w-full p-2 border-blue-300 border-2">
                        <input type="text" name="Tel_encarregado" id="" placeholder="Tel_encarregado" class="w-full p-2 border-blue-300 border-2">
                        <select class="w-full p-2 border-blue-300 border-2"  name="Genero" id="">
                                <option  value="M">M</option>
                                <option  value="F">F</option>
                        </select >

                        <div class="pb-5">
                            <button class="w-full bg-blue-300 rounded px-4 py-2 text-white cursor-pointer hover:bg-blue-500">Adicionar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection()


