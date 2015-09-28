<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index($indice = null) {

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Aluno incluído com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível incluir o aluno!";
            $this->load->viem('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Aluno excluído com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir o aluno!";
            $this->load->viem('includes/msg_erro', $data);
        }

        $this->load->view('listar_rota', $dados);
        $this->load->view('includes/html_footer');
    }

    public function excluir($id = null) {

        $this->db->where('idAluno', $id);
        if ($this->db->delete('aluno')) {
            redirect('rota/3');
        } else {
            redirect('rota/4');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */