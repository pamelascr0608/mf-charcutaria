<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Pâmela Resende Dev
    </title>
    <script src="https://kit.fontawesome.com/d8a9d5179c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="./images/logo.png" width="300px"></a>
            <div class="menu_items">
                <a href="./index.php">Home</a>
                <a href="./contato.php">Envie uma mensagem</a>
            </div>
        </div>
    </nav>

    <div class="mask" style="background-color: rgba(178, 60, 253, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="text-white mb-0">Page title</h1>
        </div>
    </div>

    <div class="container mt-5">
        <form class="container mt-5" method="post" action="processa.php">
            <h1 class="fw-bold mt-5"><i class="fa-solid fa-messages-question"></i>Me envie uma mensagem</h1>
            <div class="form-outline mb-4">
                <input type="text" id="nome" name="nome" class="form-control" />
                <label class="form-label" for="nome">Nome</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>
            <div class="form-outline mb-4">
                <textarea class="form-control" name="mensagem" id="mensagem" rows="4"></textarea>
                <label class="form-label" for="mensagem">Mensagem</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>
        </form>
    </div>
</body>