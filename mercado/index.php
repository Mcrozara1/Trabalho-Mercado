<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js" type="text/javascript"></script>  
<style>
    body {
        background-image: url('img/backMercado.png');
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
    }
</style>
<body>
    <div style="display: flex; justify-Content: center; align-items: center; height: fill-available; height: 100%;">
        <div id="cardLogin" class="card text-center" style="width: 20rem; padding: 1rem;">
            <h4 style="margin: 0.2rem;">SuperMercado Niederauer</h4>
            Nome do Usuário
            <input id="loginInp" style="margin: 0.2rem;" type="text" placeholder="Digite seu nome de usuario" class="form-control">
            Senha
            <input id="senhaInp" style="margin: 0.2rem;" type="text" placeholder="Digite sua Senha" class="form-control">
            <div class="btn text-white" style="background-color: #55b7f2; margin: 0.2rem;" onclick="logar();">Entrar</div>
            <div class="btn text-white" style="background-color: #41d374;  margin: 0.2rem;" onclick="window.location.href= 'cadastro.php'">Cadastrar-se</div>
        </div> 
    </div>
</body>