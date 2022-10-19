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
                <div class="container">
                    <!-- Grafico -->
                    <div class="row">
                        {{-- Braço esquerdo --}}
                        <div class="col-4">
                            <div class="cardChart card shadow p-4 my-5">
                                <canvas id="myChart" width="400" height="250"></canvas>
                            </div>
                         </div>{{-- fim da col  --}}
                    </div> {{-- fim da row --}} 
                </div> {{-- fim da container  --}}

            </div>
        </div>
        <div class="main-dir">
            <div class="main-img" data-anime="right">
                <img src="{{ asset('img/img-main.svg') }}" style="width:500px" alt="">
            </div>
            <div class="main-btn" data-anime="right">
                <button class="btn-inputs">
                    <a href="measurements/new">Nova medida</a>

                </button>
                <button class="btn-inputs">
                    <a href="measurements">Listar medidas</a>
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




    <!-- Importando o chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <!-- Script que cria o gráfico -->
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janeiro/22', 'Abril/22', 'Julho/22', 'Outubro/22', 'Janeiro/23'],
                datasets: [{
                    label: 'Braço Direito 💪',
                    data: [29, 30, 30, 31, 32],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>
@endsection
