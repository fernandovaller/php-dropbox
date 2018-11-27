<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?=SITE_TITLE?></title>      
    <link href="<?=assets('libs/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" media="all">            
    <link href="<?=assets('libs/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>" rel="stylesheet" media="all">            
    <link href="<?=assets('css/style.css', true)?>" rel="stylesheet" media="all">
                 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->     
</head>
<body class="login">    


  <div class="container">

  <div class="row">
  
        <div class="col-sm-4 col-sm-offset-4">
        
    <div class="panel panel-default panel-login">
        <div class="panel-body">
        <h2 class="text-muted">PHP Dropbox Files</h2>
        <hr>
            <form action="<?=URL?>/login" method="post" >
                <fieldset>
                    <div class="form-group">
                        <input type="email" name="email"  class="form-control input-lg" placeholder="E-mail" autofocus="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control input-lg" placeholder="Password"  value="">
                    </div>

                    <button class="btn btn-info btn-block btn-lg">Login</button>
                                        
                </fieldset>                
            </form>        
        </div>        
     </div> <!--panel -->        
        </div>
  </div>  
    
  </div>  
    
   
  <script src="<?=assets('libs/jquery/jquery-1.12.1.min.js')?>"></script>  
  <script src="<?=assets('libs/bootstrap-3.3.7-dist/js/bootstrap.min.js')?>"></script>  
  <script src="<?=assets('js/script.js', true)?>"></script>
</body>
</html>