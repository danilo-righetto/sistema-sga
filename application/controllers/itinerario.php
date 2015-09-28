<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Itinerario extends CI_Controller {

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

       
        
        $this->db->select('*');
        $dados['itinerarios'] = $this->db->get("itinerario")->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Itinerario cadastrado com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar o itinerario!";
            $this->load->viem('includes/msg_erro', $data);
        }else if ($indice == 3) {
            $data['msg'] = "Itinerario excluir com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir o Itinerario!";
            $this->load->viem('includes/msg_erro', $data);
        }else if ($indice ==5) {
            $data['msg'] = "Itinerario atualizado com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice ==6) {
            $data['msg'] = "Não foi possível atualizar o itinerario!";
            $this->load->viem('includes/msg_erro', $data);
        }

        $this->load->view('listar_itinerario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_itinerario');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {


        $data['itinerario'] = $this->input->post('itinerario');
        $data['horario_Part_Ida'] = $this->input->post('horario_Part_Ida');
        $data['horario_Cheg_Ida'] = $this->input->post('horario_Cheg_Ida');
        $data['horario_Part_Volta'] = $this->input->post('horario_Part_Volta');
        $data['horario_Cheg_Volta'] = $this->input->post('horario_Cheg_Volta');
        $data['motorista'] = $this->input->post('motorista');
        $data['monitor'] = $this->input->post('monitor');
        if ($this->db->insert('itinerario', $data)) {
            redirect('itinerario/1');
        } else {
            redirect('itinerario/2');
        }
    }

    public function excluir($id = null) {

        $this->db->where('idItinerario', $id);
        if ($this->db->delete('itinerario')) {
            redirect('itinerario/3');
        } else {
            redirect('itinerario/4');
        }
    }

    public function atualizar($id = null, $indice = null) {

        $this->db->where('idItinerario', $id);
        $data['itinerario'] = $this->db->get('itinerario')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');    

        $this->load->view('editar_itinerario', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {

        $id = $this->input->post('idItinerario');

        
        $data['itinerario'] = $this->input->post('itinerario');
        $data['horario_Part_Ida'] = $this->input->post('horario_Part_Ida');
        $data['horario_Cheg_Ida'] = $this->input->post('horario_Cheg_Ida');
        $data['horario_Part_Volta'] = $this->input->post('horario_Part_Volta');
        $data['horario_Cheg_Volta'] = $this->input->post('horario_Cheg_Volta');
        $data['motorista'] = $this->input->post('motorista');
        $data['monitor'] = $this->input->post('monitor');

        $this->db->where('idItinerario', $id);
        if ($this->db->update('itinerario', $data)) {
            redirect('itinerario/5');
        } else {
            redirect('itinerario/6');
        }
    }   

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */