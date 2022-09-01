@extends('./layouts/main')

@section('container')
    {{-- <h1>Home</h1>
    <ul>
      <li><a href="/measurements/new">Cadastrar</a></li>
      <li><a href="/measurements">Listar</a></li>
    </ul> --}}

    <div class="header">
        <div class="header-esq">
            <img src="{{ asset('img/Dshape.svg') }}" alt="">
        </div>
        <div class="header-dir">
            <img src="{{ asset('img/img-header.svg') }}" style="width:500px" alt="">
        </div>
    </div>
    <div class="main">
        <div class="main-esq">
            <div class="main-titulo" data-anime="left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
            </div>
            <div class="main-conteudo" data-anime="left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
            </div>
        </div>
        <div class="main-dir">
            <div class="main-img" data-anime="right">
                <img src="{{ asset('img/img-main.svg') }}" style="width:500px" alt="">
            </div>
            <div class="main-btn" data-anime="right">
                <button class="btn-inputs">
                    Login
                </button>
                <button class="btn-inputs">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-conteudo">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </div>
        <div class="footer-logo">
            <img src="{{ asset('img/Dshape.svg') }}" alt="">
        </div>
    </div>
@endsection
