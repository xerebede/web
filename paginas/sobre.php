<section id="sobre">

	<article id="empresa">
		<h1>Sobre World Technology</h1>

		<img src="img/sobre/empresa.jpg" alt="empresa">

	
		<h2>Lorem ipsum dolor sit amet consectetuer</h2>

		<p>
			Fusce suscipit varius cumcis duim penatibus etuncen magnidis
			parturient montes nascetur ridiculus nulla fusce feugiat 
			alesda odio orbi nunc gravida cursusnecu luctus lorem maece 
			trtique acsem aenan auctor ultrice cumsan malesuada situmamet.
			Nulla dui fusce feugiat malesuada odio lorem ipsum dolor.			
		</p>

		<p>
			Mauris fermentum dictum magna. Sed laoreet aliquam leo.
			Ut tellus dolor, dapibus eget elementum vel cursus eleifend,
			elit. Aenean auctor wis. Aliquam erat volutpat. 
			Duis ac turpis. Integer rutrum ante lacus variusm cum sociis
			natoque penatibus et magnis. Disem parturient  montes nascetur
		    ridiculus mus.			
		</p>

		<p>
			Mauris fermentum dictum magna. Sed laoreet aliquam leo.
			Ut tellus dolor, dapibus eget elementum vel cursus eleifend,
			elit. Aenean auctor wis. Aliquam erat volutpat. 
			Duis ac turpis. Integer rutrum ante lacus variusm cum sociis
			natoque penatibus et magnis. Disem parturient  montes nascetur
		    ridiculus mus.			
		</p>
		<div style="clear:both"></div>

	</article>


	<article id="projetos">
		<h1>Melhores projetos</h1>

		<h2>Lorem ipsum dolor sit amet consectetuer</h2>

		<div style="clear:both"></div>

		<p>
			Fusce suscipit varius cumcis duim penatibus etunce
			magnidis parturient montes nascetur ridiculus nulla
			fusce feugiat alesda odio orbi nunc gravida cursusnecu 
			luctus lorem maece trtique acsem aenan auctor ultrice 
			cumsan malesuada situmamet. Nulla dui fusce feugiat 
			malesuada odio lorem ipsum dolor. Maurisen fermentum 
			dictum magna. Sed laoreet aliquam leo. 
			Ut tellus dolor, dapibus eget elementum 
			vel cursus eleifend, elit. Aenean auctor wis. 
			Aliquam erat volutpat. Duis ac turpis.
		</p>	

		<div style="clear:both"></div>	

		<ul>
			<li><a href="#">Projeto 01</a></li>
			<li><a href="#">Projeto 02</a></li>
			<li><a href="#">Projeto 03</a></li>
			<li><a href="#">Projeto 04</a></li>		
		</ul>

		<ul>		
			<li><a href="#">Projeto 05</a></li>
			<li><a href="#">Projeto 06</a></li>
			<li><a href="#">Projeto 07</a></li>
		</ul>

		<div style="clear:both"></div>

	</article>

	<article class="depoimento">
		<h1>Ultimo Depoimento</h1>

		<?php
			include "php/conexao.php";

			$selecionar = mysql_query("SELECT id, nome, cargo, mensagem FROM depoimentos_tb ORDER BY id DESC LIMIT 1");

			while ($campo = mysql_fetch_array($selecionar)) 
			{
				$nome = $campo['nome'];
				$cargo = $campo['cargo'];
				$mensagem = $campo['mensagem'];

				$limite = substr($mensagem, 0, 130);
				$corte = strrpos($limite, ' ');
				$mensagem_cortada = substr($mensagem, 0, $corte);
			}
		?>
		

		<blockquote>
			<a href="#">
				<?php echo "$mensagem_cortada...";?>
			</a>						
		</blockquote>

		<div id="seta"></div>

		<span id="nome"><?php echo "$nome";?></span>
		<span id="cargo"><?php echo "$cargo";?></span>
	</article>
	<div style="clear: both;"></div>

</section>