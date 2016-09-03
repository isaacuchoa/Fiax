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
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
	
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
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
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.php">Home</a></li>
				   <li><a href="#left-somos">Quem Somos</a></li>
				   <li><a href="servicos.php">Serviços</a></li>
				   <li><a href="contato.php">Fale Conosco</a></li>
				</ul>
			</div>
			<a href='index.php' class="logo"><img src="images/logo.jpg" /></a>
		</div>
	</div>
</header>
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container" >
		<ul class="rslides" id="slider">
			<li>
				<a href="servicos.php"><img src="images/img2.jpg" alt=""></a>				
			</li>
			<li>
				<a href="servicos.php"><img src="images/img1.jpg" alt=""></a>				
			</li>
			<li>
				<a href="servicos.php"><img src="images/img4.jpg" alt=""></a>				
			</li>
			<li>
				<a href="contato.php"><img src="images/img3.jpg" alt=""></a>				
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<!--////////////////////////////////////Container-->

<section id="container">
	<div class="wrap-container">
		<section class="content-box box-1">
			<div class="zerogrid">
				
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col item">
							<div class="zoom-container">
								<img src="images/banner-img1.jpg" />
							</div>
							<div class="item-content">
								<span>Desenvolvimento Web</span>
								<p>Criação e desenvolvimento de websites responsivos com inovação, tecnologia e qualidade. Solicite um orçamento sem compromisso e conheça nossos
							serviços.</p>
								<a class="btn" href="#">Veja Mais</a>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col item">
							<div class="zoom-container">
								<img src="images/banner-img2.jpg" />
							</div>
							<!--<div class="item-content">
								<span>Otimização de Sites</span>
								<p>Conjunto de estratégias e ferramentas para otimização dos sites. Utilizamos o Search Engine Optimization - SEO, para tornar o site bem posicionado nos mecanismos de
									busca da Internet.
								  </p>
								<a class="btn" href="#">Veja Mais</a>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col item">
							<div class="zoom-container">
								<img src="images/banner-img3.jpg" />
							</div>-->
							<div class="item-content">
								<span>Sistemas para Internet</span>
								<p>Análise, desenvolvimento e manutenção de sistemas utilizando tecnologias de ponta. Oferecemos sistemas de
									qualidade e somos comprometidos com os nossos clientes. 
								</p>
								<a class="btn" href="#">Veja Mais</a>
							</div>
						</div>
					</div>
				</div><!-- END ROW -->
				<div class="row"><!-- QUEM SOMOS -->
					<div class="wrap-content">
						<div class="zoom-container">								
									<div id="left-somos">
										<h1>Quem Somos:</h1>
										<p>
										A <strong>Fiax</strong> surgiu com a idéia de prover soluções de tecnologia da informação para auxiliar na comunicação entre usuários e 
										sistemas: web e mobile.</p>
										<p>Gostamos de criar, inovar,  utilizar novas tecnologias e adquirir novos conhecimentos para atender
										a demanda do mercado e ficar sintonizado com as necessidades de cada cliente.</p>
										<p>Temos o propósito de contribuir para criar um mundo melhor, prestando serviços de qualidade e criando novas tecnologias,
										para melhorar a vida das pessoas e promover uma sociedade conectada com a Internet.</p>
										<br>
									
										<p><strong>Nossa Missão:</strong> Prover serviços de internet a todos e ser acessível em todos os lugares. </p>
										
									</div>
							<div id="right-somos"><img src="images/banner2-qs.jpg" alt="banner página quem somos"/></div>								
						</div>
					</div>

				</div>
			</div><!-- END ZEROGRID -->
		</section><!-- END content-box box-1 -->
		
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