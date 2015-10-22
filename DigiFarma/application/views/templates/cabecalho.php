<b>Faça Seu Login</b>   
    <br>
    <form class="form-horizontal" action="faz_login.php" method="post" >
        <div class="form-group">
            <label for="inputEmail" class="form-control">Email:</label>
            <div class="col-lg-6">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="form-control">Senha:</label>
            <div class="col-lg-6">
                <input type="password" class="form-control" name="senha" id="inputPassword3" placeholder="Senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="lembrar"> lembre-se de mim
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class=" col-lg-6">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>