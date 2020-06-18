<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bin2con</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="container descola-topo">
        <div class="row">
            <div class="col-12 col-md-5 titulo">
                <h1>bin2dec</h1>
                <p>Conversor online de número binário</p>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 ">
                <input class="form-control" type="text" name="binario" id="binario" placeholder="Binário">
            </div>
            <div class="col-12 col-md-2">
                <button class="btn btn-primary btn-block" type="button" id="converter">Converter</button>
            </div>
            <div class="col-12 col-md-5">
                <input class="form-control" type="text" name="decimal" id="decimal" disabled>
            </div>
        </div>
        <div class="row">
            <div id="erro-conversao" class="col">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>