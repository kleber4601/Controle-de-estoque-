<!DOCTYPE html>
<html lang="pt-br">
<head>

<title></title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="_css/style3.css"/>

</head>
<body>
<header id="cabecalho">

<img src="_imagens/icone3.jpg" alt="Smiley face"/>
<div id="buscar">
	<form action=" " method="post">
	  
	  <div class="container">  
		<input type="search" id="busca" name="q">
		<button type="submit">BUSCAR</button>
	  </div>

	</form>
</div>


</header>
<section id="conteudo">

<div id="mais-vistos">

<h1>musicas mais vistas</h1>
	<div id="foto01">
		<a href="http://localhost/html/pagina.html"><img src="_imagens/red2.jpg"/></a>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div id="foto02">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div id="foto03">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div id="foto04">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>

</div>

<div id="filmes">

<h1>Filmes mais vistos</h1>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
</div>
<div id="recentes">
<h1>Recentes</h1>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>
	<div class="foto06">
		<img src="_imagens/red2.jpg"/>
		<p>Red</P>
		<p>Taylor Swift</p>
	</div>

</div>

</section>

<aside id="lateral">
	<nav id="nav-menu-lateral">
	<h1>Musicas</h1>
	
	<ul id="ul-menu-lateral">
		<li>Internacional</li>
		<li>Samba</li>
		<li>Sertanejo</li>
		<li>Funk</li>
		<li>Rap</li>
		<li>Forro</li>
		<li>Eletronica</li>
		<li>Rock</li>

	</ul>
	</nav>
	
	<nav id="nav-menu-lateral-two">
	
	<h1>Trailers de Filmes</h1>
	
	<ul id="ul-menu-lateral-two">
		<li>Ação</li>
		<li>Aventura</li>
		<li>Romance</li>
		<li>Comedia</li>
		<li>Ação</li>
		<li>Aventura</li>
		<li>Romance</li>
		<li>Comedia</li>
		<li>Ação</li>
		<li>Aventura</li>
		<li>Romance</li>
		<li>Comedia</li>

	</ul>
	</nav>
</aside>

<footer id="rodape">
Copyright © 2018 | Kleber Vales
</footer>

<?php

	$nome = $_GET['nome'];
	$id = $_GET['id'];
	
	echo $nome;
	echo $id;
	
	$query = "insert into numero(nome, id) values ('{$nome}', {$id})";
	$conexao = mysqli_connect('localhost', 'root', '123456', 'testando');
	
	mysqli_query($conexao, $query);
	
	mysqli_close($conexao);
	
?>

</body>
</html>