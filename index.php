<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chaves, do, meu, site">
	<meta name="description" content="Descrição do meu site">
	<!--importando icones de awesome-->
	<script src="https://kit.fontawesome.com/03315148f8.js" crossorigin="anonymous"></script> 
	 <!--importando fonte do google fontes-->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,200;1,300&display=swap" rel="stylesheet">
	<!--importando fonte do fonts adobe-->
	<link rel = "stylesheet" href = "https://use.typekit.net/ccq5ozk.css">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<meta charset="utf-8"/>
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left">LogoMarca</div><!--logo-->
			<nav class="desktop rigth">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav><!--desktop-->
			<nav class="mobile rigth">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>			
			</nav><!--mobile-->
			<div class="clear"></div> <!--necessario depois de usar float (na classe left)-->
	 	</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="overlay"></div> <!--deixar o banner cinza-->
			<div class="center">
				<form>
					<h2>Qual o seu melhor Email</h2>
					<input type="email" name="email" required/>
					<input type="submit" name="acao" value="Cadastrar">
				</form>
			</div><!--center-->
	</section><!--banner-principal-->

	

	<section class="Especialidades">
		<div class="center">  
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-css3-alt iconCSS3"></i></h3>
				<h3>CSS3</h3>
				<p>CSS3 é a terceira versão das famosas Cascading Style Sheets, pela qual se define estilos para um projeto web. O CSS descreve como elementos são mostrados na tela, com isso pode-se criar estilos únicos para seus projetos web, alterando diversos aspectos de design no layout da página.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-html5 iconHTML"></i></h3>
				<h3>HTML5</h3>
				<p>HTML5 é uma linguagem de marcação para a World Wide Web e é uma tecnologia chave da Internet, originalmente proposto por Opera Software. Criada para ser utilizável por todos os desenvolvedores da Web Aberta, Sua semântica permite descrever mais precisamente o conteúdo da pagina.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-js-square iconJAVA"></i></h3>
				<h3>JAVASCRIP</h3>
				<p>JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma. Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias da World Wide Web.</p>
			</div><!--box-especialidades-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--Especialidades-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Tanizia  L. Fagundes</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a sem vitae lacus placerat facilisis in et ipsum. Mauris feugiat nulla ligula, eget pellentesque enim molestie vitae. Ut eget diam finibus, cursus purus quis, commodo libero. Proin aliquam efficitur nulla quis fermentum. 
				</p>
				<p>
					Integer efficitur ex augue, at consectetur leo fermentum a. Nulla vel tortor dui. Nulla ornare tincidunt purus, suscipit tincidunt lorem. 
				</p>
			</div><!--div w50-->
			
			<div class="w50 left">
				<img class="rigth" src="imagem/tani2.jpg">
			</div><!--w50-->

			<div class="clear"></div> <!--necessario depois de usar float (na classe left)-->
		</div><!--center-->		
	</section><!--descricao autor-->

	<section class="Extras">
		<div class="center">

			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p>"Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum..."</p>
					<p class="nome-autor">Loren Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single"> <!--novo depoimento-->
					<p>"Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum..."</p>
					<p class="nome-autor">Loren Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single"> <!--novo depoimento-->
					<p>"Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum..."</p>
					<p class="nome-autor">Loren Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->

			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos-single">
					<ul>
						<li>Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum</li>
						<li>Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum</li>
						<li>Donec ipsum enim, fermentum at consequat in, auctor vitae sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ligula nulla, volutpat ut hendrerit vel, tristique eu nunc. Nulla volutpat lacus in dui molestie, sit amet pulvinar purus bibendum</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--Extras-->

	<footer>
		<div class="center">
			<p>Todos os Direitos Reservados tanizia.fagundes</p>
		</div><!--center-->
		<div class="redes-sociais"> 
			<ul>
				<li><a class="fab fa-github" href="https://github.com/TaniziaFagundes"></a></li>
				<li><a class="fab fa-linkedin" href="https://www.linkedin.com/in/tanizia-fagundes-a45896125/"></a></li>
			</ul>
		</div>
	</footer>
</body>
</html>