<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Fiax - Comunicação web e mobile</title>
	<meta name="description" content="Desenvolvimento web e mobile">
	<meta name="author" content="www.fiax.com.br">
	<link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery183.min.js"></script>
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header class="bg-theme">
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.php">Home</a></li>				  
				   <li><a href="servicos.php">Serviços</a></li>
				   <li><a href="contato.php">Fale Conosco</a></li>
				</ul>
			</div>
			<a href='index.php' class="logo"><img src="images/logo.jpg" /></a>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header">
			<div class="zerogrid"> 
				
			</div>
		</div>	
		<div class="zerogrid">
			<div class="row">
				<div class="col-full">
					<div class="wrap-col">
						<div id="main-content">
							<div class="wrap-content">
							<div id="left-cont">								
								<img src="images/img-contato.jpg" alt="fale conosco"/><br><br>
								<div class="social"><a href="#"><img src="images/social.jpg" alt="redes sociais"/></a></div>
							</div>
							<div id="right-cont">
								<h1>Fale Conosco:</h1>
								<div class="col-2-3">
										<div class="wrap-col">
										<div class="contact">
												       <div id="form_contato">
				 <form action="enviar.php" method="post" enctype="multipart/form-data" name="form1">
                                        Nome:<br/>
                                        <input type="text" name="nome" required="required" class="caixa3" id="nome" size="40" align="right" /><br/>
                                        Cidade:<br/>
                                        <input type="text" name="cidade" required="required" class="caixa3" id="cidade" size="40" /><br/>
                                        Telefone:<br/>
                                        <input type="text" name="telefone" required="required" class="caixa3" id="telefone" size="40" align="right" /><br/>
                                        Email:<br/>
                                          <input type="text" name="email" required="required" class="caixa3" id="email" size="40" align="right" /><br/>
                                        Assunto:<br/>
                                         <input type="text" name="assunto" required="required" class="caixa3" id="assunto" size="40"  align="right"/></br>
                                        Mensagem:</br>
                               			 <textarea name="mensagem" required="required"  cols="50" rows="10" class="caixa2"  id="mensagem"></textarea><br/><br/>
                                      <input name="Submit" type="submit" class="button2" value="enviar" />
                                      <input name="Submit2" type="reset" class="button2" value="limpar" /></td>
                                   
                                    </form>  </div>
     

  		
											</div>
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<h5>&copy Fiax - Comunicação web e mobile - 2016</h5>
				
			</div>
		</div>
	</div>
</footer>

</div>
</body></html>