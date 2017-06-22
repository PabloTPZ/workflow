<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KARDEX</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<!-- Top content -->
    <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Habilitando al estudiante</strong></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Habilitando estudiante</h3>
                                    <p>Habilitar</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="glyphicon glyphicon-ok"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" method="post" action="hab.php" class="login-form">
			                    	<input type="hidden" name="codflujo" value="<?php echo $_GET["codflujo"];?>"/>
									<input type="hidden" name="codproceso" value="<?php echo $_GET["codproceso"];?>"/>
                                   

			                        <div class="has-warning">
									<div class="checkbox">
									    <label>
									      <input type="checkbox" name="hab" value="false"> Habilitar
									    </label>
									  </div>
									</div>

								
                                    <div class="form-group">
                                        <button type="submit"  name="ok" value="ok" class="btn">Siguiente!</button>
                                    </div>
			                    </form>
                               
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>