<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>SGLV</title>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
                <a href="#" class="navbar-brand">
                    <img src="assets/img/logo/logo.jpg" style="width: 200px; height: 100px; border-radius: 50%; box-shadow: 0px 3px 15px rgba(44, 44, 44, 0.363)" alt="404">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-nav w-100 justify-content-center" id="nav-collapse">
                    <div class="nav-item nav-tabs"><a href="#" class="nav-link">Início</a></div>
                    <div class="nav-item nav-tabs"><a href="#" class="nav-link">Dashboard</a></div>
                    <div class="nav-item nav-tabs"><a href="#" class="nav-link">Sobre</a></div>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 w-100 bg-light" style="height: 1200px;">
                    <button class="btn btn-dark shadow mt-5 w-100" data-toggle="collapse" data-target="#cadastro-collapse">
                        Cadastro
                    </button>

                    <div class="collapse" id="cadastro-collapse">
                        <div class="list-group text-center">
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Cliente
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Funcionário
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Carro
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Marca
                            </button>
                        </div>
                    </div>


                    <button class="btn btn-dark shadow mt-2 w-100" data-toggle="collapse" data-target="#consulta-collapse">
                        Consulta
                    </button>

                    <div class="collapse" id="consulta-collapse">
                        <div class="list-group text-center">
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Cliente
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Funcionário
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Carro
                            </button>
                            <button class="btn btn-secondary mt-2 w-75 mx-auto">
                                Marca
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-dark shadow mt-2 w-100">
                        Monitoramento
                    </button>
                </div>
                
                <div class="col-md-10">

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>