<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid d-flex align-items-center justify-content-start h-80"
        style="background: url(./images/img-home/banner.jpeg) no-repeat center center; background-size:cover">
        <div class="float-left">
            <h3 class="text-about-us-phrase red-text float-left mt-5 p-5 ">
                “A arte de transformar <br>
                carnes em aromas e
                <br>sabores.”
            </h3>
            <div class="d-flex m-5 pl-5">
                <a class="contact-button p-2 w-50 justify-content-center text-center" href="./produtos.php">Conheça
                    nossos
                    produtos</a>
            </div>
            <br>
            <br>
        </div>
    </div>
    <section id="nossa-historia">
        <div class="container-fluid w-100">
            <div class="row">
                <div class="col-md-7 background-beige p-5">
                    <h2 class="ml-5 red-text text-about-us-phrase">
                        Nossa história
                        <div class="text-center p-2 mb-0 pb-0 align-bottom "
                            style="background-color: #f3d09ccf; width:42%; height: 5%;margin-top: -1%;"></div>
                    </h2>
                    <br />
                    <h6 class=" p-2 red-text">
                        A empresa MF charcutaria nasceu da paixão de Marco Faro pela culinária, em especial pela vontade
                        de
                        desenvolver produtos cárneos de forma artesanal, evitando sua industrialização. <br /> <br />
                        Natural do Rio de
                        Janeiro, e apaixonado por culinária desde sempre, ao se mudar para o interior de Minas Gerais,
                        empreendeu no ramo de charcutaria. <br /> <br /> Atualmente a empresa conta com uma loja situada
                        na
                        cidade de
                        Resende Costa onde vende seus produtos. O empreendimento também atua na venda em atacado
                        cobrindo
                        várias cidades na região.
                        <br />
                    </h6>
                    <div class="row ">
                        <div class="col d-flex justify-content-center align-items-center">
                            <img src="./images/img-produtos/img47.jpg" alt="Produto MF Charcutaria" width="40%"
                                class="rounded d-flex align-self-center">
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                            <img src="./images/img-home/nossa-historia.jpeg" alt="Produto MF Charcutaria" width="40%"
                                class="rounded d-flex align-self-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 background-red d-flex justify-content-center">
                    <h3 class="text-about-us-phrase p-5 mt-5">
                        “A charcutaria
                        tem com objetivo
                        transformar
                        carnes em
                        produtos
                        especiais com
                        aromas e sabor.”
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-2 mb-0 pb-0 align-bottom" style="background-color: #802D3D;"></div>

    <div class="text-center p-2 mb-0 pb-0 align-bottom" style="background-color: #802D3D;">
        <div class="container w-100 background-beige">
            <div class="row">
                <img src=".\images\img-produtos\Catálogo Produtos MF Charcutaria_page-0003.jpg" class="w-100 d-block"
                    alt="Product 3" width="100%">
            </div>
        </div>
    </div>
    <section id="contato">
        <div class="p-5 background-beige red-text">
            <h1 class="ml-5 red-text text-about-us-phrase ">
                Contato
                <div class="text-center p-2 mb-0 pb-0 align-bottom"
                    style="background-color: #f3d09ccf; width:13%; height: 3%;margin-top: -1%;"></div>
            </h1>
            <div class="container p-5">
                <form method="post" action="processa.php">
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-6">
                            <div class="form-outline">
                                <label class="form-label">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <label class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Telefone</label>
                        <input type="number" id="telefone" name="telefone" class="form-control"
                            placeholder="Telefone" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control" rows="4"
                            placeholder="Mensagem"></textarea>
                    </div>
                    <!-- Submit button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="contact-button p-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <div id="cookie-banner" class="cookies-banner">
        <p>Este site usa cookies para garantir que você tenha a melhor experiência em nosso site. <button
                id="accept-cookies" class="accept-cookies">Aceitar</button></p>
    </div>

</body>

<script>
    window.onload = function () {
        var cookieBanner = document.getElementById('cookie-banner');
        var acceptCookies = document.getElementById('accept-cookies');

        // Verifique se o cookie já foi aceito
        if (document.cookie.split(';').some((item) => item.trim().startsWith('cookies-accepted='))) {
            cookieBanner.style.display = 'none';
        } else {
            cookieBanner.style.display = 'block';
        }

        // Ao clicar no botão "Aceitar", salve um cookie para lembrar a preferência do usuário
        acceptCookies.onclick = function () {
            var date = new Date();
            date.setFullYear(date.getFullYear() + 1); // Cookie expira em 1 ano

            document.cookie = "cookies-accepted=true; expires=" + date.toUTCString() + "; path=/";
            cookieBanner.style.display = 'none';
        }
    }
    // Pegue o valor do parâmetro 'message' na URL
    var urlParams = new URLSearchParams(window.location.search);
    var message = urlParams.get('message');

    // Se a mensagem existir, exiba em uma caixa de diálogo de alerta
    if (message) {
        alert(message);
    }
</script>
</html>