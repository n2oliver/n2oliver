<style>
    .error {
        background: linear-gradient(135deg,#ffa573,#f57754);
    }
    .warning {
        background: linear-gradient(135deg,#ffff73,#ffa554);
    }
    .success {
        background: linear-gradient(135deg,#54a554,#77f554);
    }
    .login-cadastro {
        background: rgba(255,255,255, .93);
        color: #000;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 20px;
        height: -webkit-fill-available;
        margin: auto;
    }
</style>
<script src="/js/Login.js"></script>

<?php
    if(!isset($usuario['email'])) {
    ?>
    <div class="menu col-md-6 col-lg-4 login-cadastro d-flex align-content-center justify-content-center">
        <small class="d-flex  flex-column text-start">
            <div id="camada-email" class="px-2">
                <strong>E-mail:</strong>
                <input id="email" type="text" class="form-control" placeholder="E-mail" />
            </div>
            <div class="row text-start">
                <div id="camada-nome" class="px-2 d-none">
                    <strong>Nome:</strong>
                    <input id="nome" maxlength="16" type="text" class="form-control" placeholder="Nome" />
                </div>    
                <div id="camada-senha" class="px-2">
                    <strong>Senha:</strong>
                    <div class="row align-items-start">
                        <div class="col-6 pl-0 py-0 ps-0">
                            <input id="senha" type="password" class="form-control" placeholder="Senha" />
                            <small id="esqueci-senha" class="recovery-link m-1 text-nowrap">Esqueci minha senha</small>
                        </div>
                        <div class="col-6 px-0 py-0">
                            <button class="btn btn-success" id="login">Login</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-content-center py-2">
                        <strong id="nao-tenho-conta" class="btn btn-primary">Criar conta</strong>
                    </div>
                </div>
                <div id="cadastrar-senha" class="px-2 d-none">
                    <strong>Criar nova senha:</strong>
                    <div class="row align-items-start">
                        <div class="col-6 pl-0 py-0">
                            <input id="cadastro-senha" type="password" class="form-control" placeholder="Senha" />
                            <small id="sair-cadastro" class="recovery-link m-1 text-nowrap text-warning">Cancelar</small>
                        </div>
                        <div class="col-6 px-0 py-0">
                            <button class="btn btn-success" id="cadastrar">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <div id="codigo-email" class="px-2 d-none">
                    <strong>Código:</strong>
                    <div class="row align-items-start">
                        <div class="col-6 px-0 py-0">
                            <input id="codigo-enviado" type="text" class="form-control" placeholder="Cole aqui" />
                        </div>
                        <div class="col-6 pr-0 py-0">
                            <button id="verificar" class="btn btn-success text-nowrap">Verificar</button>
                        </div>
                    </div>
                    <small id="nao-recebi" class="recovery-link m-1 text-nowrap d-none">Não recebi o código</small>
                    <small id="cancelar" class="recovery-link m-1 text-nowrap d-none text-warning">Cancelar</small>
                    <div><small>Atenção! Ao criar sua conta, você concorda em estabelecer um canal de comunicação entre você e a n2oliver. Caso deseje não receber mais informações sobre nossos serviços, produtos e outras comunicações, basta em "cancelar inscrição" pelo link no e-mail recebido.</small></div>
                </div>
            </div>
        </small>  
    </div>
<?php } else { ?>
    <div class="login-cadastro col-md-6 col-lg-4 align-content-center">
        <small><strong>Bem vindo de volta, <?= $usuario['nome'] ?>!</strong></small> <br>
        <small><?= $usuario['email'] ?></small> <br>
        <img alt="sair" src="<?= $APP_URL ?>/img/logout.png" width="32" height="32" id="sair" />
    </div>
<?php } ?>