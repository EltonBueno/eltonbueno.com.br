@extends('layouts.base')

@section('conteudo')
 <div class="container">
    <div class="" id="sobre-mim" >
        <h1><b>Designer, Desenvolvedor Frontend e Backend</b></h1>

        <h4>Eu projeto e codifico coisas lindamente simples e amo o que faço.</h4>

        <img class="img-fluid" src="/images/topo.png" >


    </div>
</div>
    {{-- Sobre mim --}}
    {{-- Container-fluid --}}
    <div class="container-fluid">
        {{-- Sobre mim --}}
        <div  class="row justify-content-center " id="sobre-mim-bg">
        {{-- background --}}
            <div class="col-md-6  text-center " id="sobre-mim-text" >

               <p>
                  <h1><b> Oi, eu sou Elton. Prazer em te conhecer.</b></h1>
                   <br>
                   <a>
                   Desde o início da minha jornada como designer freelancer há <br>
                   mais de 9 anos, fiz trabalho remoto para agências e politicos,<br>
                   colaborei com pessoas talentosas para criar um site de reservar para a<br>
                   Pousada Shamballah. Estou tranquilamente<br>
                   confiante, naturalmente curioso e trabalhando perpetuamente<br>
                   para melhorar minhas habilidades.
                   </a>
               </p>

            </div>

        </div>
        {{-- /Sobre mim --}}
    </div>
    {{-- /Container-fluid --}}
    {{-- /Sobre mim --}}

    {{-- Habilidades --}}
    {{-- Container --}}
    <div class="container">
        {{-- Habilidades --}}
        <div class="row mt-5 justify-content-center text-center" id="habilidades">
            <div class="col-md-3 before mt-5 " data-anime="right">
                <img class="img-fluid" src="/images/graphic-designer.png" width="70px">
                <h2>Designer Gráfico</h2>
                <br>
                <p>Sempre gostei de criar artes gráficas como panfletos, folders, logotipos e cartões de visita.</p>
                <br>
                <h4 style="color:#827cee;">Coisas que gosto de projetar:</h4>
                <br>
                <p>UX, interface do usuário, Web, aplicativos, logotipos</p>
                <br>
                <h4 style="color:#827cee;">Ferramentas de projeto:</h4>
                <br>
                <p>Adobe Photoshop<br>
                    CorelDraw</p>

            </div>
            <div class="col-md-3 before mt-5 " data-anime="up" >
                <img class="img-fluid" src="/images/coding.png" width="70px">
                <h2>Front-end</h2>
                <br>
                <p>Gosto de codificar coisas do zero e gosto de dar vida a ideias no navegador.</p>
                <br>
                <h4 style="color:#827cee;">Linguagens:</h4>
                <br>
                <p>JavaScript<br>
                    PHP<br>
                    Laravel 9 (Framework)<br>
                    HTML<br>
                    CSS

                    </p>
                <br>
                <h4 style="color:#827cee;">Ferramentas de projeto:</h4>
                <br>
                <p>Visual Code<br>
                    Visual Studio<br>
                    Bootstrap<br>
                    Github<br>
                    terminal<br></p>
            </div>
            <div class="col-md-3 mt-5" data-anime="left" >
                <img class="img-fluid" src="/images/web-development.png" width="70px">
                <h2>Back-end</h2>
                <br>
                <p>Gosto de da lógica de programação e dar vida a sistemas, sempre procurando aprender mais.</p>
                <br>
                <h4 style="color:#827cee;">Linguagens:</h4>
                <br>
                <p>C#<br>
                    .NET<br>
                    JavaScript<br>
                    PHP

                    </p>
                <br>
                <h4 style="color:#827cee;">Ferramentas de projeto:</h4>
                <br>
                <p>Visual Code<br>
                    Visual Studio<br>
                    Github<br>
                    terminal<br></p>
            </div>
        </div>
        {{-- /Habilidades --}}
    </div>
    {{-- /Container --}}
    {{-- /Habilidades --}}

    {{-- Trabalhos Recentes --}}
    {{-- Container --}}
    <div class="container text-center mb-5  pt-5" id="trabalhos-recentes" data-anime="up" >
        <div class="row">
            <h1 class="mt-5 mb-5"><b>Meus Trabalhos Recentes</b></h1>
            <div class="col-md-3 me-5 justify-content-center">
                <a href="https:www.novo.pousadashamballah.com.br" target="_blank">
                    <img id="trabalhos" class="img-fluid" src="/images/Shambalah.png" width="400px">
                </a>
                <legend class="text-start fs-6 ps-2">
                   <b>Pousada Shamballah</b>
                   <br>
                   <p>Criação de Sistema de Reservas
                    <br>Acesse: <a href="https:www.novo.pousadashamballah.com.br" target="_blank">Shamballah</a></p>
                </legend>
            </div>
        </div>
    </div>
    {{-- /Container --}}
    {{-- /Trabalhos Recentes --}}

@endsection
