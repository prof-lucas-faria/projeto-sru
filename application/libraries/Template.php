<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* Esta classe recebe o Template do projeto que é habilitado no caminho abaixo:
<aplication><config><autoload.php>
Linha 61 $autoload['libraries'] = array('template'); 
*/


class Template {
    
    function show($view, $data=array()){
        
        $CI = & get_instance();

        // load Header
        $CI->load->view('template/header', $data);
        
        // load Content
        $CI->load->view($view, $data);

        // load Footer
        $CI->load->view('template/footer', $data);

        // Scripts
        $CI->load->view('template/script', $data);
    }
}