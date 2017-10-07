<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro extends CI_Controller{
    public function index()
	{
		$this->load->view('cadastrousu');
	}
    

public function cadastrar(){
		
		$nome = $this->input->post("nome");
                $sobrenome = $this->input->post("sobrenome");
                $email = $this->input->post("e-mail");
		$senha = sha1($this->input->post("senha"));
		
		//Código sha1  da senha 123456 7c4a8d09ca3762af61e59520943dc26494f8941b
		//O usuário no exemplo aqui será usuario@email.com.br
		//Mas em um projeto real, você trará isto do banco de dados.
		
		//Se o usuário e senha combinarem, então basta eu redirecionar para a url base, pois agora o usuário irá passa
		//pela verificação que checa se ele está logado.
		if ($nome == true && $sobrenome == true && $email == true && $senha == true ) {
			$this->session->set_userdata("cadastrado", 1);
			redirect(base_url());
		} else {
			//caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
			$dados['erro'] = "Usuário/Senha incorretos";
			$this->load->view("cadastrousu", $dados);
		}
	

}

/*
	 * Aqui eu destruo a variável logado na sessão e redireciono para a url base. Como esta variável não existe mais, o usuário
	 * será direcionado novamente para a tela de login.
	 */
	public function logout(){
		$this->session->unset_userdata("logado");
		redirect(base_url());
		
	}


                }
