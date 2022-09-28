@extends('layouts.base')

@section('conteudo')

    {{-- Formulario --}}
    {{-- Container --}}

        <div class="container" id="contato">

            <div class="form-group ">
                <h1 class="text-center">Contato</h1>
                <form action="{{ route('contato.store')}}" method="post">
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-7 pt-2" >
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" data-aos="fade-left">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" >
                            <label for="numero" class="form-label">Numero:</label>
                            <input type="text" name="numero" id="numero" class="form-control"  value="{{old('telefone')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" >
                            <label for="mensagem" class="form-label">Mensagem:</label>
                            <textarea name="mensagem" id="mensagem" cols="30" rows="3" class="form-control"  required>{{old('mensagem')}}</textarea>

                            <input type="submit" value="Cadastrar" class="btn btn-success mt-2">
                        </div>

                    </div>
                </form>
            </div>
        </div>

        {{-- /Container --}}
        {{-- /Formulario --}}


@endsection
