<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Produto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form method="post" action="/produto">
            @csrf
            <div class="form-group">
                <label for="id-input-id">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" disabled>
                <small id="idHelp" class="form-text text-muted">Não é necessário informar o ID para cadastrar um novo dado.</small>
            </div>
            <div class="form-group">
                <label for="id-input-nome">Nome do Produto</label>
                <input name="nome" type="text" class="form-control" id="id-input-nome" placeholder="Digite o nome do Produto">
            </div>
            <div class="form-group">
                <label for="id-input-preco">Preço</label>
                <input name="preco" type="number" class="form-control" id="id-input-preco" placeholder="Digite o preço do produto">
            </div>

            <div class="form-group">
                <label for="id-select-Tipo_Produtos_id">Tipo do Produto</label>
                <select name="Tipo_Produtos_id" id="id-select-Tipo_Produtos_id" class="form-select" aria-label="Default select example">
                    <option selected> Opem and select menu</option>
                    @foreach ($tipoProdutos as $tipoProduto)
                    <option value={{$tipoProduto->id}}>{{$tipoProduto->descricao}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="id-input-ingredientes">Ingredientes</label>
                <input name="ingredientes" type="text" class="form-control" id="id-input-ingredientes" placeholder="Digite os ingredientes do produto">
            </div>
            <div class="form-group">
                <label for="id-input-urlImage">Imagem</label>
                <input name="urlImage" type="text" class="form-control" id="id-input-urlImage" placeholder="inclua uma imagem do produto">
            </div>


            <div class="my-1">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="/produto">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>
