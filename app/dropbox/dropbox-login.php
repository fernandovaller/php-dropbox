<div class="row">
    <div class="col-sm-6"><h1>Dropbox Login</h1></div>
    <div class="col-sm-6 text-right">
        <a href="?p=usuarios-form-cad" class="btn btn-primary">Cadastrar</a>
    </div>
</div>

<hr>

<h3>Conecte ao Dropbox</h3>
<p></p>
<p>Para cadastrar arquivos no sistema, primeiro você deve conectar o Dropbox ao Sistema.</p>
<p>Clique no botão abaixo e conceda acesso ao sicgestaoapp;</p>

<div class="text-center">
    <?php
    $dropbox = new App\DropboxUpload();
    $authUrl = $dropbox->login();
    ?>

    <a href="<?= $authUrl ?>" class="btn btn-info btn-lg">Conectar ao Dropbox</a>
</div>