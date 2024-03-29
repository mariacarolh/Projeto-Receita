<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    // Navbar
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-piggy-bank" viewBox="0 0 16 16">
                    <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0m1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962" />
                    <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                </svg></a>
            <a class="navbar-brand" href="index.php">Receitas da Vó Maria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Receitas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listareceitas.php">Listar Receitas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cadastrareceitas.php">Cadastrar Receita</a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Cadastrar Receita</h2>
        <hr>
        <hr>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>

        <body>
            <form action="criarnobd.php" method="POST">
                <div class="row g-3">
                    <div class="col-sm-7">

                        <b>Nome</b>
                        <input type="text" class="form-control" name="nome" placeholder="Ex: Strogonoff de frango" aria-label="State">
                    </div>

                    <div class="row g-3">
                        <b>Fonte</b>
                        <input type="text" class="form-control" name="fonte" placeholder="Ex: Youtube" aria-label="State">
                    </div>

                    <div class="col-sm">
                        <b>Receita</b>
                        <input type="text" class="form-control" name="receita" placeholder="Digite aqui a sua receita" aria-label="State">
                    </div>

                    <div class="col-sm">
                        <b>Data</b>
                        <input type="date" class="form-control" name="data" aria-label="">
                    </div>

                    <div id="secaoIngredientes">
                        <h3>Ingredientes</h3>
                        <div class="row g-3 ingredient-row">
                            <div class="col-sm-4">
                                <label for="ingredient"></label>
                                <input type="text" class="form-control" name="ingredientes[]" placeholder="Ex: Farinha" aria-label="Ingredient">
                            </div>
                            <div class="col-sm-3">
                                <label for="quantity">Quantidade</label>
                                <input type="text" class="form-control" name="quantidade[]" placeholder="Ex: 1 cup" aria-label="Quantity">
                            </div>
                            <div class="col-sm-3">
                                <label for="unit">Unidade</label>
                                <input type="text" class="form-control" name="unidade[]" placeholder="Ex: Kg" aria-label="Unit">
                            </div>

                            <div class="col-sm-2">
                                <br><button type="button" class="btn btn-outline-dark" onclick="removerIngrediente(this)">Remover</button>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-dark" onclick="adicionarIngrediente()">Adicionar Ingrediente</button>

                    <div class="d-grid gap-2 col-4 mx-auto mt-3">
                        <button class="btn btn-dark" type="submit">Cadastrar</button>
                    </div>

                </div>
            </form>

            <script>
                // Adicionar/remover dinamicamente campos de ingredientes
                function adicionarIngrediente() {
                    var secaoIngredientes = document.getElementById('secaoIngredientes');
                    var novaLinha = secaoIngredientes.querySelector('.ingredient-row').cloneNode(true);
                    secaoIngredientes.appendChild(novaLinha);
                }

                function removerIngrediente(botao) {
                    var secaoIngredientes = document.getElementById('secaoIngredientes');
                    var linha = botao.parentNode.parentNode;
                    if (secaoIngredientes.childElementCount > 1) {
                        secaoIngredientes.removeChild(linha);
                    } else {
                        // Redefinir os campos se apenas uma linha restar
                        var inputs = linha.querySelectorAll('input');
                        inputs.forEach(function(input) {
                            input.value = '';
                        });
                    }
                }
            </script>

        </body>

        </html>