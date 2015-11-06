

<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h2>Cadastre-se</h2>
        <form id="cadastro" method="post" action="<?php echo base_url('Clientes/salvar_novo') ?>">
            <div class="form-group">
            <label for="inputName">Nome Completo:</label>
            <input type="text" class="form-control" name="nome" id="textarea" placeholder="Nome Completo">
        </div>
        <div class="form-group">
            <label for="inputName">Login:</label>
            <input type="text" class="form-control" name="login" id="textarea" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="inputName">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="textarea" placeholder="CPF">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Senha:</label>
            <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha">
        </div>
        <div class="form-group">
            <label for="inputPassword">Confirmar Senha:</label>
            <input type="password" class="form-control" name="confirmasenha" id="inputPassword" placeholder="Confirmar Senha">
        </div>
            <br>
        <div class="form-group">
            <label for="textarea">Endereço de entrega:</label>
            <textarea class="form-control" id="textarea" name="endereco" placeholder="Digite seu endereço completo, com logadouro, número e complemento, cidade, UF e CEP"></textarea>
        </div>
        <button class="btn btn-default">Cadastrar</button>
        <br>
        <br>
        </form>
    </div>
</div>
