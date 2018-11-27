<div class="row">
    <div class="col-sm-6"><h1>Arquivos Cadastrar</h1></div>
    <div class="col-sm-6 text-right">
        <a href="?p=arquivos" class="btn btn-default">Voltar</a>
    </div>
</div>

<hr>
<?php 
if(!usuario_logado('token')) :  
    redirect('?p=dropbox-login');
else : 
?>

    <form action="pages/arquivos-actions?acao=inserir" method="POST" role="form" enctype="multipart/form-data" >    

    <div class="row">

        <div class="form-group col-sm-12">
            <label for="">Arquivo</label>
            <input type="file"  name="arquivo" >
        </div>

        <div class="form-group col-sm-12">
            <label for="">Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="Descrição">
        </div>

    </div>

        <button type="submit" class="btn btn-primary">Cadastar</button>
    </form>
<?php endif; ?>

