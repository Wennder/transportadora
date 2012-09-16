<?php
class FormOrdemServico extends Zend_Form {


	public function init() {
		parent::init();
		// id_cliente_origem
		$id_cliente_origem = $this->createElement('hidden', 'id_cliente_origem');
		$id_cliente_origem	->setRequired(true)
							->setAttrib('id', 'id_cliente_origem')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($id_cliente_origem);
		// id_cliente_destino
		$id_cliente_destino = $this->createElement('hidden', 'id_cliente_destino');
		$id_cliente_destino	->setRequired(true)
							->setAttrib('id', 'id_cliente_destino')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($id_cliente_destino);

		// data_execucao
		$data_execucao = $this->createElement('text', 'data_execucao');
		$data_execucao	->setRequired(true)
						->setAttrib('id', 'data_execucao')
						->setAttrib('class', 'input-small')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($data_execucao);

		// km_inicial
		$km_inicial = $this->createElement('text', 'km_inicial');
		$km_inicial	->setRequired(false)
					->setAttrib('id', 'km_inicial')
					->setAttrib('class', 'input-small')
					->removeDecorator('HtmlTag')
					->removeDecorator('label');
		$this->addElement($km_inicial);

		// km_final
		$km_final = $this->createElement('text', 'km_final');
		$km_final	->setRequired(false)
					->setAttrib('id', 'km_final')
					->setAttrib('class', 'input-small')
					->removeDecorator('HtmlTag')
					->removeDecorator('label');
		$this->addElement($km_final);

		// origem_endereco
		$origem_endereco = $this->createElement('text', 'origem_endereco');
		$origem_endereco	->setRequired(true)
							->setAttrib('id', 'origem_endereco')
							->setAttrib('class', 'input-xlarge')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($origem_endereco);

		// origem_cpf_cnpj
		$origem_cpf_cnpj = $this->createElement('text', 'origem_cpf_cnpj');
		$origem_cpf_cnpj	->setRequired(true)
							->setAttrib('id', 'origem_cpf_cnpj')
							->setAttrib('class', 'input-xlarge')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($origem_cpf_cnpj);

		// origem_razao_social
		$origem_razao_social = $this->createElement('text', 'origem_razao_social');
		$origem_razao_social->setRequired(true)
							->setAttrib('id', 'origem_razao_social')
							->setAttrib('class', 'input-xlarge')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($origem_razao_social);

		// origem_bairro
		$origem_bairro = $this->createElement('text', 'origem_bairro');
		$origem_bairro	->setRequired(true)
						->setAttrib('id', 'origem_bairro')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($origem_bairro);

		// origem_cidade
		$origem_cidade = $this->createElement('text', 'origem_cidade');
		$origem_cidade	->setRequired(true)
						->setAttrib('id', 'origem_cidade')
						->setAttrib('class', 'input-medium')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($origem_cidade);

		// origem_contato
		$origem_contato = $this->createElement('text', 'origem_contato');
		$origem_contato	->setRequired(true)
						->setAttrib('id', 'origem_contato')
						->setAttrib('class', 'input-large')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($origem_contato);

		// origem_uf
		$origem_uf = $this->createElement('text', 'origem_uf');
		$origem_uf	->setRequired(true)
					->setAttrib('id', 'origem_uf')
					->setAttrib('class', 'input-small')
					->removeDecorator('HtmlTag')
					->removeDecorator('label');
		$this->addElement($origem_uf);

		// origem_fone
		$origem_fone = $this->createElement('text', 'origem_fone');
		$origem_fone	->setRequired(true)
						->setAttrib('id', 'origem_fone')
						->setAttrib('class', 'input-large')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($origem_fone);

		// destino_razao_social
		$destino_razao_social = $this->createElement('text', 'destino_razao_social');
		$destino_razao_social->setRequired(true)
							->setAttrib('id', 'destino_razao_social')
							->setAttrib('class', 'input-xlarge')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($destino_razao_social);

		// destino_endereco
		$destino_endereco = $this->createElement('text', 'destino_endereco');
		$destino_endereco	->setRequired(true)
							->setAttrib('id', 'destino_endereco')
							->setAttrib('class', 'input-xlarge')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($destino_endereco);

		// destino_cpf_cnpj
		$destino_cpf_cnpj = $this->createElement('text', 'destino_cpf_cnpj');
		$destino_cpf_cnpj	->setRequired(true)
							->setAttrib('id', 'destino_cpf_cnpj')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($destino_cpf_cnpj);

		// destino_bairro
		$destino_bairro = $this->createElement('text', 'destino_bairro');
		$destino_bairro	->setRequired(true)
						->setAttrib('id', 'destino_bairro')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($destino_bairro);

		// destino_cidade
		$destino_cidade = $this->createElement('text', 'destino_cidade');
		$destino_cidade	->setRequired(true)
						->setAttrib('id', 'destino_cidade')
						->setAttrib('class', 'input-medium')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($destino_cidade);

		// destino_uf
		$destino_uf = $this->createElement('text', 'destino_uf');
		$destino_uf	->setRequired(true)
						->setAttrib('id', 'destino_uf')
						->setAttrib('class', 'input-small')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($destino_uf);

		// destino_contato
		$destino_contato = $this->createElement('text', 'destino_contato');
		$destino_contato	->setRequired(true)
						->setAttrib('id', 'destino_contato')
						->setAttrib('class', 'input-large')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($destino_contato);

		// destino_fone
		$destino_fone = $this->createElement('text', 'destino_fone');
		$destino_fone	->setRequired(true)
						->setAttrib('id', 'destino_fone')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($destino_fone);

		// titulo_servico
		$titulo_servico = $this->createElement('text', 'titulo_servico');
		$titulo_servico	->setRequired(true)
						->setAttrib('id', 'titulo_servico')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($titulo_servico);

		// descricao_servico
		$descricao_servico = $this->createElement('textarea', 'descricao_servico');
		$descricao_servico	->setRequired(true)
							->setAttrib('id', 'descricao_servico')
							->setAttrib('class', 'input-xlarge span6')
							->setAttrib('rows', '6')
							->removeDecorator('HtmlTag')
							->removeDecorator('label');
		$this->addElement($descricao_servico);

		// valor_frete
		$valor_frete = $this->createElement('text', 'valor_frete');
		$valor_frete->setRequired(true)
					->setAttrib('id', 'valor_frete')
					->setAttrib('class', 'input-medium')
					->removeDecorator('HtmlTag')
					->removeDecorator('label');
		$this->addElement($valor_frete);

		// valor_seguro
		$valor_seguro = $this->createElement('text', 'valor_seguro');
		$valor_seguro	->setRequired(true)
						->setAttrib('id', 'valor_seguro')
						->setAttrib('class', 'input-medium')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($valor_seguro);

		// valor_imposto
		$valor_imposto = $this->createElement('text', 'valor_imposto');
		$valor_imposto	->setRequired(true)
						->setAttrib('id', 'valor_imposto')
						->setAttrib('class', 'input-medium')
						->removeDecorator('HtmlTag')
						->removeDecorator('label');
		$this->addElement($valor_imposto);

		// observacao
		$observacao = $this->createElement('textarea', 'observacao');
		$observacao	->setRequired(true)
					->setAttrib('id', 'observacao')
					->setAttrib('class', 'input-large span11')
					->setAttrib('rows', '6')
					->removeDecorator('HtmlTag')
					->removeDecorator('label');
		$this->addElement($observacao);
	}
}