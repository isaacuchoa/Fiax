<?php 
	session_start();
	if(!isset($_SESSION["LOGADO"])){
		@header("Location: login.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>&Aacute;rea administrativa - FIAX</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link href="css/mainMenu.css" rel="stylesheet" type="text/css" />


<link href="menu/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/botoes.js"></script>

<?php include"include/metatags.php"; ?>

<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../js/functions.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(document).ready(function(){
		$('#menu').css('height', 'auto');
		$('#menu ul').hide();
		$('#menu h3').click(function(){
			$(this).next().slideToggle(1500)
			.siblings('ul:visible').slideUp(1500);
			$(this).toggleClass('corrente');
			$(this).siblings('#menu h3').removeClass('corrente');
		});
	});
	// ]]>	
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body>
<div id="estrutura">

	<div id="topo"> <a href="http://www.acemt.com.br/adm" target="_self"><img src="../images/banneradm.jpg" width="800" height="99" border="0" /></a>
    </div>
    
<div id="col_esquerda">
    	<div id="menu">
            <h5>:: Clientes</h5>
            
             <h3>Cadastro</h3>
            
            <ul>
            <li><a href="#" title="Cadastro Users">Editar</a></li>
            
      
           
            </ul>
            
            <h3>Site</h3>
            
            <ul>
            <li><a href="#" title="Inclusão">Inclusão</a></li>
            <li><a href="#" title="Alteração">Alteração</a></li>
            <li><a href="#" title="Exclusão">Exclusão</a></li>
      
           
            </ul>
            
            <h3>Sistema</h3>
            
            <ul>
            <li><a href="#" title="Inclusão">Inclusão</a></li>
            <li><a href="#" title="Alteração">Alteração</a></li>
            <li><a href="#" title="Exclusão">Exclusão</a></li>
      
           
            </ul>
            
             <h3>Aplicativos</h3>
            
            <ul>
            <li><a href="#" title="Inclusão">Inclusão</a></li>
            <li><a href="#" title="Alteração">Alteração</a></li>
            <li><a href="#" title="Exclusão">Exclusão</a></li>
      
           
            </ul>
            
            <h3>Sugestões</h3>
            
            <ul>
            <li><a href="#" title="Diretoria">Diretoria</a></li>
            <li><a href="#" title="Diretoria">Suporte</a></li>              
            <li><a href="#" title="Diretoria">Vendas</a></li>
            </ul>
            
                       
             <h3>Reclamações</h3>
            
            <ul>
            <li><a href="#" title="Cadastro das Fotos">Novo Chamado</a></li>
            
                          
           
            </ul>
            
                       
                     
           
            
            <h5>:: Suporte</h5>
                        
            <h3>Problemas Técnicos</h3>
            <ul>
            <li><a href="#" title="Site com roblemas">Site fora do Ar</a></li>
            <li><a href="#" title="Site com roblemas">Site desatualizado</a></li>
            <li><a href="#" title="Problemas">Erro nas Páginas</a></li>
            <li><a href="#" title="Alteração da agenda">Erro no Banco de Dados</a></li>
            </ul>
            
            <h3>Controle Financeiro</h3>
            <ul>
             <li><a href="#" title="Hospedagem">Hospedagem</a></li>
              <li><a href="#" title="Dominio">Dominio</a></li>
               <li><a href="#" title="Manutenção do site">Manutenção</a></li>
             
            	
            </ul>
            <br><br><div class="style1"><a href="classe/LoginSistema.php?txtLocal=logOff">Sair do sistema</a></div>
            <!--
            <h3>Associados</h3>
            <ul>
               <li><a href="?telas=frmManuAssociados" title="Manutenção dos associados">busca</a></li>
            	
            </ul>
            
            <h3>Fotos</h3>
            <ul>
               <li><a href="?telas=frmManuFotos" title="Manutenção dos Fotos">fotos</a></li>
            	
            </ul>
            
            <h3>Bibliografia</h3>
            <ul>
               <li><a href="?telas=frmManuBibliografia" title="Manutenção da Bibliografia">bibliografia</a></li>
            	
            </ul>-->
            
                    
            
            
         </div>
    </div>
    
    
    <div id="meio-site">
    
    			<?php
					include_once("classe/verURL.php");
					$url = new verURL();
					$url->trocarURL($_GET["telas"])
          		?>
    
    </div>
    
    

<!-- fim da estrutura -->
</div>
</body>
</html>
