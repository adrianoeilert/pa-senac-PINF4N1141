

<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h2>Cadastre-se</h2>
        <form id="cadastro" method="post" action="<?php echo base_url(isset($clientes[0]['idPessoas']) ? 'clientes/atualizar' : 'Clientes/salvar_novo') ?>">
            <input type="hidden" name="id" value="<?php echo (isset($clientes[0]['idPessoas']) ? $clientes[0]['idPessoas'] : '') ?>">
            <div class="form-group">
                <label for="inputName">Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="textarea" placeholder="Nome Completo" value="<?php echo (isset($clientes[0]['nome']) ? $clientes[0]['nome'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Login:</label>
                <input type="text" class="form-control" name="login" id="textarea" placeholder="Login" value="<?php echo (isset($clientes[0]['login']) ? $clientes[0]['login'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="textarea" placeholder="CPF" value="<?php echo (isset($clientes[0]['CPF']) ? $clientes[0]['CPF'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?php echo (isset($clientes[0]['email']) ? $clientes[0]['email'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha" value="<?php echo (isset($clientes[0]['senha']) ? $clientes[0]['senha'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirmar Senha:</label>
                <input type="password" class="form-control" name="confirmasenha" id="inputPassword" placeholder="Confirmar Senha" value="<?php echo (isset($clientes[0]['confirmasenha']) ? $clientes[0]['confirmasenha'] : '') ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="textarea">Endereço de entrega:</label>
                <textarea class="form-control" id="textarea" name="endereco" placeholder="Digite seu endereço completo, com logadouro, número e complemento, cidade, UF e CEP" value="<?php echo (isset($clientes[0]['endereco']) ? $clientes[0]['endereco'] : '') ?>"></textarea>
            </div>
            <button class="btn btn-success"><?php echo (isset($clientes[0]['idPessoas']) ? 'Atualizar' : 'Cadastrar') ?> Cliente</button>
            <br>
            <br>
        </form>
    </div>
</div>
