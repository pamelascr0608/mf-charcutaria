<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'mf_charcutaria';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

    if (mysqli_query($conn, $sql)) {
        header('Location: /mf-charcutaria/index.php?message=' . urlencode('Novo registro criado com sucesso'));
    } else {
        header('Location: /mf-charcutaria/index.php?message=' . urlencode('Error: ' . $sql . '<br>' . mysqli_error($conn)));
    }
?>
