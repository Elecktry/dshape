@extends('./layouts/main')

@section('container')
<div class="conteudo-signup">

    <div class="main-signup">
        <div class="signup-esq">
            <div class="text-signup">
                <img src="{{ asset('img/Security.svg') }}" width="400px" alt="">
            </div>
        </div>
        <div class="signup-dir">
            <div class="text-dir">
                <h1>Login</h1>
                <div class="socias-signup">
                    <div class="cicle-socias"></div>
                    <div class="cicle-socias"></div>
                    <div class="cicle-socias"></div>
                </div>
                <p>OR USE YOUR EMAIL FOR REGISTRATION:</p>
            </div>
            <div>
                <form class="form-signup">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-signup">Signup</button>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection
