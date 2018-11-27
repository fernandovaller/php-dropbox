<div class="row">
    <div class="col-sm-6"><h1>Usuários Cadastrar</h1></div>
    <div class="col-sm-6 text-right">
        <a href="?p=usuarios" class="btn btn-default">Voltar</a>
    </div>
</div>

<hr>

<form action="pages/usuarios-actions?acao=inserir" method="POST" role="form">    

<div class="row">

    <div class="form-group col-sm-12">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>

    <div class="form-group col-sm-12">
        <label for="">E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="E-mail">
    </div>

</div>

    <button type="submit" class="btn btn-primary">Cadastar</button>
</form>


