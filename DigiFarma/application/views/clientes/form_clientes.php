<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h1>Cadastro de Clientes</h1>
        <form id="cadastro" method="post" action="<?php echo base_url(isset($cliente[0]['idPessoas']) ? 'clientes/atualizar' : 'clientes/salvar_novo') ?>">
            <input type="hidden" name="id" value="<?php echo (isset($cliente[0]['idPessoas']) ? $cliente[0]['idPessoas'] : '') ?>">
            <div class="form-group">
                <label for="inputName">Nome Completo:</label>
                <input type="name" class="form-control" name="nome" id="textarea" placeholder="Nome" value="<?php echo (isset($cliente[0]['nome']) ? $cliente[0]['nome'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Login:</label>
                <input type="name" class="form-control" name="login" id="textarea" placeholder="Login" value="<?php echo (isset($cliente[0]['login']) ? $cliente[0]['login'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">CPF:</label>
                <input type="name" class="form-control" name="cpf" id="textarea" placeholder="CPF" value="<?php echo (isset($cliente[0]['cpf']) ? $cliente[0]['cpf'] : '') ?>">
            </div>            
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?php echo (isset($cliente[0]['email']) ? $cliente[0]['email'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha" value="<?php echo (isset($cliente[0]['senha']) ? $cliente[0]['senha'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirmar Senha:</label>
                <input type="password" class="form-control" name="confirmasenha" id="inputPassword" placeholder="Confirme a Senha" value="<?php echo (isset($cliente[0]['senha']) ? $cliente[0]['senha'] : '') ?>">
            </div>            
            <div class="form-group">
                <label for="textarea">Endereço:</label>
                <textarea class="form-control" id="textarea" name="endereco" placeholder="Digite seu endereço completo, com logadouro, número e complemento, cidade, UF e CEP" value="<?php echo (isset($cliente[0]['endereco']) ? $cliente[0]['endereco'] : '') ?>"></textarea>
            </div>
            <button class="btn btn-primary"><?php echo (isset($cliente[0]['idPessoas']) ? 'Atualizar' : 'Cadastrar') ?> Cliente</button>
        </form>
    </div>
</div>