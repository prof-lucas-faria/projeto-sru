<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model {

	public function logarColaborador($email = '', $senha = ''){
		
		if( !$email && !$senha ) {
		
			return false;
		} else {
			$this->db->where(array('eMail'=>$email, 'senha'=>md5($senha)));
			$data = $this->db->get('AcessoRestrito'); // coletando usuarios no banco
			
			if( $data->num_rows() == 1 ) {
				return true;
			} else {
				return false;
			}
			
		}
		
	}
	
	public function ehLogado(){
		if( $this->session->userdata('logado') !== true ) {
		
			redirect(site_url('index.php/acesso_controller/resultadoAcesso/'));
		
		}
	}
	
}