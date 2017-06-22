<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEB</title>

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

<body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong> Entrega del Certificado del Estudiando </strong></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Certificado</h3>
                                    <p>Datos del certificado</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="glyphicon glyphicon-list"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
                                    
                                      <?php 
										$codflujo = $_GET["codflujo"];
										$codproceso = $_GET["codproceso"];
										$link = mysql_connect("localhost","prueba","123456"); 
										mysql_select_db("workflow");
										$sql = "select * from estudiante";
										$data=mysql_query($sql,$link);
                                        echo "<table class='table table-bordered' id='form-username'>";
										echo "<tr>";
										echo "<td>";
										echo "Nombre";
										echo "</td>";
										echo "<td>";
										echo "ci";
										echo "</td>";
										echo "<td>";
										echo "carrera";
										echo "</td>";
										echo "<td>";
										echo "modalidad";
										echo "</td>";
										echo "<td>";
										echo "habilitado";
										echo "</td>";
										echo "</tr>";
										while($row = mysql_fetch_row($data)) {
											echo "<tr>";
											echo "<td>";
											echo $row[0];
											echo "</td>";
											echo "<td>";
											echo $row[1];
											echo "</td>";
											echo "<td>";
											echo $row[2];
											echo "</td>";
											echo "<td>";
											echo $row[3];
											echo "</td>";
											echo "<td>";
											echo $row[10];
											echo "</td>";
											echo "</tr>";
										}
                                        echo "</table>";
										?>
			                    	
                                    
			                    </form>
                                <form role="form" action="flujo2.php" class="login-form">
                                    <input type="hidden" name="codflujo" value="<?php echo $codflujo;?>"/>
                                    <input type="hidden" name="codproceso" value="<?php echo $codproceso;?>"/>
                                    <button type="submit" class="btn">Sigueinte</button>
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
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

