<section id="cadastro">
	<form id="depoimento-form" method="post" action="php/funcoes.php?funcao=gravar">	
		<input type="text" id="nome" name="nome" placeholder="Nome"/>
		<input type="text" id="email" name="email" placeholder="E-mail" value="<?php echo $_POST['email'];?>"/>
		<input type="text" id="cargo" name="cargo" placeholder="Cargo"/>
		<textarea id="mensagem" name="mensagem" placeholder="Mensagem" maxlength="360"></textarea>

		<span id="caracteres">Restam apenas <span id="restantes"></span> caracteres para voce digitar</span>
		
		<input type="submit" value="Enviar" />
		<input type="reset" value="Limpar Campos" />
	</form>
	
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
