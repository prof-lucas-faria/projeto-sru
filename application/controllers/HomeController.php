<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Carrega somente a View BuscarUsuário
		// $this->load->view('BuscarUsuario');

		// Faz a leitura do Modelo Usuario_model	
		$this->load->model('usuario_model');

		// dados['usuarios'] ira receber a consulta feita no metodo BuscarNome que esta
		//localizado no model Usuario_model
		$dados['usuarios'] = $this->usuario_model->BuscarNome();

		// Carrega todos os templates dentro da View
		$this->template->show('home', $dados);
	}
}
