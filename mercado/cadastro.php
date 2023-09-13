<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js" type="text/javascript"></script>  
<style>
    body {
        background-image: url('img/backMercado.png');
        background-size: cover; /* Isso ajustará automaticamente o tamanho da imagem para cobrir toda a tela */
        background-position: center; /* Isso centralizará a imagem na tela */
        background-repeat: no-repeat; /* Isso impedirá que a imagem se repita */
    }
</style>
<body>
    <div style="display: flex; justify-Content: center; align-items: center; height: fill-available; height: 100%;">
        <div id="cardLogin" class="card text-center" style="width: 20rem; padding: 1rem;">
            <h4 style="margin: 0.2rem;">SuperMercado Niederauer</h4>
            Nome Completo
            <input id="nomeInp" style="margin: 0.2rem;" type="text" placeholder="Digite seu nome completo" class="form-control">
            Nome de Login
            <input id="loginInp" style="margin: 0.2rem;" type="text" placeholder="Digite seu Login" class="form-control">
            E-mail
            <input id="emailInp" style="margin: 0.2rem;" type="text" placeholder="Digite seu email" class="form-control">
            Senha
            <input id="senhaInp" style="margin: 0.2rem;" type="text" placeholder="Digite sua Senha" class="form-control">
            Confirma Senha
            <input id="senhaConfInp" style="margin: 0.2rem;" type="text" placeholder="Confirme sua senha" class="form-control">
            <div class="btn text-white" style="background-color: #41d374;  margin: 0.2rem;" onclick="cadastrar()">Cadastrar</div>
        </div> 
    </div>
</body>