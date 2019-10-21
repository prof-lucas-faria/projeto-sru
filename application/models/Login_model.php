<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model {

	public function verifica($eMail = '', $senha = ''){
		
		if( !$eMail && !$senha ) {
		
			return false;
		
		} else {
			$this->db->where(array('eMail'=>$eMail, 'senha' => $senha));
			$res = $this->db->get('AcessoRestrito'); // coletando usuarios no banco
			
			if( $res->num_rows() == 1 ) {
			
				return true;
			
			} else {
			
				return false;
			
			}
			
		}
		
	}
	
	public function ehLogado(){
		if( $this->session->userdata('logado') !== true ) {
		
			redirect(site_url('login_controller'));
		
		}
	}
	
}