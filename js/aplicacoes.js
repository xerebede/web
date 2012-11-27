$(document).ready(function() 
{
	//Configuração do plugin Nivo Slider
	$('#nivoSlider').nivoSlider({
		effect: 'fold',
		slices:15,
		boxCols:8,
		boxRows:8,
		animSpeed:500,
		pauseTime:5000,
		directionNav:false,
		directionNavHide:false,
		controlNav:true,
		captionOpacity:1,
		customChange: function(){},
	});
	


	//Abas
	$("#antigas").hide();
	
	$("#abas li a:first").addClass("ativo");

	$("#abas li a").click(function() 
	{
		$("#abas li a").removeClass("ativo"); 	//Retira a classe ativo de todas as abas
		$(this).addClass("ativo");				//Adiciona a classe ativo na classe clicada
		var aba = $(this).attr("name");			//Armazena o atributo name da aba clicada em uma variavel
		$("#conteudoABA section").hide();			
		$("#" + aba).fadeIn();
	});
	


	//Configuração dos depoimentos circulantes e plugin Cycle
	$("#depoimentos-cycle .depoimento").hide();
	$("#depoimentos-cycle .depoimento:first").show();
	$("#depoimentos-cycle #cycle").cycle({
		fx: 'scrollUp',
		height: '50px',
		sync: 100,
		delay: 500
	});
	

	//Validação do formulário
	document.getElementById("depoimento-form").onsubmit = function()
	{
		var nome = document.getElementById("nome");
		var email = document.getElementById("email");
		var cargo = document.getElementById("cargo");
		var mensagem = document.getElementById("mensagem");
		
		if (!/\w+\s+\w+\s\w+/.test(nome.value))
		{
			alert("informe seu nome completo");
			nome.focus();
			nome.select();
			return false;
		}
		else if (!/\w{3,}@\w{3,}\.\w{2,3}/.test(email.value))
		{
			alert("Informe um endereço de email válido");
			email.focus();
			email.select();
			return false;
		}
		else if (!/[a-zA-Z]{3,}\s*/.test(cargo.value))
		{
			alert("Preencha o campo cargo corretamente.");
			cargo.focus();
			cargo.select();
			return false;
		}
		else if (mensagem.value.length < 30)
		{
			alert("A mensagem deve ter no mínimo 30 caracteres");
			mensagem.select();
			return false;
		}
	};

	//Contagem de caracteres restantes
	var mensagem = document.getElementById("mensagem");
	document.getElementById("restantes").innerHTML = 360;
	mensagem.onkeypress = function(tecla)
	{
		document.getElementById("restantes").innerHTML = 360 - (mensagem.value.length);

		if ((mensagem.value.length + 1) > 360) 
		{
			if (tecla.keyCode == 8)
			{
				return true;
			}
			mensagem.value = mensagem.value.substring(0, 360);
			return false;
		}
	};

});