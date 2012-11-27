<section id="depoimentos">
	<h1>Depoimentos</h1>
	
		<?php
			include "php/conexao.php";

			$selecionar = mysql_query("SELECT id, nome, cargo, mensagem FROM depoimentos_tb ORDER BY nome");

			while ($campo = mysql_fetch_array($selecionar)) 
			{
				$nome = $campo['nome'];
				$cargo = $campo['cargo'];
				$mensagem = $campo['mensagem'];
		?>

	<article class="depoimento-completo">
		<img src="img/sobre/colaborador.jpg" alt="" />
	
		<blockquote>
			<p>
				<?php echo "$mensagem";?>
			</p>
		</blockquote>
		
		<div id="seta"></div>

		<span id="nome"><?php echo "$nome";?></span>
		<span id="cargo"><?php echo "$cargo";?></span>
		
	</article>

		<?php
			}
		?>
</section>