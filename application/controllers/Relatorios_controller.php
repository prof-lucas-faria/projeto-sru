<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios_controller extends CI_Controller {

    public function index() {
        
    }

    public function relatorios() {

        $this->load->model('relatorios_model');

        $data['titulo'] = "Relatórios"; //titulo da página
        $this->template->show('relatorios/relatorios', $data);
    }

    public function resultado() {

        $this->load->model('relatorios_model');

<<<<<<< HEAD
        if($_POST['Consulta'] == 'opcao1'){
=======
        if ($_POST['ConsultaPorGenero'] != "") {
>>>>>>> 76ef6d949f90a992cdea6de347e8ddc5cab20a14

            $data['listagem'] = $this->relatorios_model->consultaPorGenero($_POST['dataHoraI'], $_POST['dataHoraF']);
        }

<<<<<<< HEAD
        if($_POST['Consulta'] == 'opcao2'){

            $data['listagem'] = $this->relatorios_model->consultaGeral($_POST['dataHoraI'], $_POST['dataHoraF']);
        }

        if($_POST['Consulta'] == 'opcao3'){

            $data['listagem'] = $this->relatorios_model->consultaPorCurso($_POST['dataHoraI'], $_POST['dataHoraF']);
        }

    
=======
>>>>>>> 76ef6d949f90a992cdea6de347e8ddc5cab20a14
        $data['titulo'] = "Resultado Relatório"; //titulo da página
        // $this->template->show('relatorios/resultadoRelatorio', $data);
        $this->template->show('usuario/teste', $data);
    }

}
