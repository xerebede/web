<section id="promocoes">
	<?php
	require_once('/php/jformer.php');

	$CadastroForm = new JFormer('CadastroForm', array(
		'title' => '<h1>Cadastro de clientes</h1>',
		'submitButtonText' => 'Cadastrar',
	));
	
	$CadastroForm->addJFormComponentArray(array(
	
		new JFormComponentName('nome', 'Nome:', array(
			'validationOptions' => array('required'),
			'tip' => '<p><b>Nome:</b> Primeiro nome.</p> <p><b>IN:</b> Inicial do segundo nome.</p> <p><b>Sobrenome:</b> Último nome.</p>',
		)),
		
		new JFormComponentDropDown('sexo', 'Genero:',
			array(
				array('label' => 'Selecione', 'value' => '', 'disabled' => true),
				array('label' => 'Masculino', 'value' => 'm'),
				array('label' => 'Femenino', 'value' => 'f'),
			),
			array(
				'width' => '135px',
				'validationOptions' => array('required'),
				'tip' => '<p></p>',
			)
		),
		
		new JFormComponentAddress('endereco', 'Endereço:', array(
			'validationOptions' => array('required'),
			'tip' => '<p>Informe seu endereço de acordo com os campois solicitados.</p>',
		)),		
		
		new JFormComponentCreditCard('cartao', 'Cartão de crédito:', array(
			'validationOptions' => array('required'),
			'tip' => '<p>Informe os dados do seu cartão de crédito.</p>',
		)),
		
		new JFormComponentSingleLineText('email', 'E-mail:', array(
			'width' => '232px',
			'validationOptions' => array('required', 'email'),
		)),
		
		new JFormComponentSingleLineText('telefone', 'Telefone:', array(
			'mask' => '(999) 9999-9999',
			'width' => '232px',
			'validationOptions' => array('required'),
		)),	
		
		new JFormComponentSingleLineText('assunto', 'Assunto:', array(
			'width' => '350px',
			'validationOptions' => array('required'),
		)),
		
		new JFormComponentTextArea('mensagem', 'Mensagem:', array(
			'width' => '500px',
			'validationOptions' => array('required'),
		)),
	));
	
	function onSubmit($formValues) {
    
		if(!empty($formValues->name->middleInitial)) {
			$name = $formValues->name->firstName . ' ' . $formValues->name->middleInitial . ' ' . $formValues->name->lastName;
		}
		else {
			$name = $formValues->name->firstName . ' ' . $formValues->name->lastName;
		}

		$toAddress = 'kl_nike@hotmail.com';
		$fromAddress = $formValues->email;
		$fromName = $name;
		$subject = $formValues->assunto.' from '.$fromName;
		$message = $formValues->mensagem;

		$mail = mail($toAddress, $subject, $message, 'From: '.$fromAddress."\r\n".'Reply-To: '.$fromAddress."\r\n".'X-Mailer: PHP/'.phpversion());

		if($mail) {
			$response['successPageHtml'] = '
				<h1>Obrigado por se cadastrar</h1>
				<p>Cadastro concluido com sucesso.</p>
			';
		}
		else {
			$response['failureNoticeHtml'] = '
				Houve um problema durante o envio da mensagem.
			';
		}

		return $response;
	}

	$CadastroForm->processRequest();
?>
</section>