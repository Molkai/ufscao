<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $data['parceiros'] = $this->Parceiro_model->get_all_parceiros();
        $data['eventos'] = $this->Evento_model->get_all_eventos2();
        $data['catioro'] = $this->Catioro_model->get_all_catioro();
        $data['login'] = $this->Login_model->get_all_login();
        $this->load->view('home/index', $data);
    }
    
    //ADOTE
    
    public function adote(){
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('nome_adote')
            && $this->input->post('id_cat') && $this->input->post('contato_adote')) {   
            $params = array(
				'nome_adote' => $this->input->post('nome_adote'),
                'contato_adote' => $this->input->post('contato_adote'),
				'id_cat' => $this->input->post('id_cat'),
            );
            
            $adote_id = $this->Adote_model->add_adote($params);
            $data['status'] = 'Seu pedido de adoção foi enviado :)';
            $data['parceiros'] = $this->Parceiro_model->get_all_parceiros();
            $data['eventos'] = $this->Evento_model->get_all_eventos2();
            $data['catioro'] = $this->Catioro_model->get_all_catioro();
            $data['login'] = $this->Login_model->get_all_login();
            $this->load->view('home/index', $data);
        } else {            
            redirect('home/index');
        }
    }
    
    public function more_events($offset){
        $data['offset'] = $offset;
        $data['eventos'] = $this->Evento_model->get_all_eventos_with_offset($offset);
        
        $this->load->view('home/eventos', $data);
    }
    
    public function helpers_add(){
       if(isset($_POST) && count($_POST) > 0) {   
            $params = array(
				'carona_ajud' => intval($this->input->post('carona_ajud')),
				'lar_temp_ajud' => intval($this->input->post('lar_temp_ajud')),
				'divulg_ajud' => intval($this->input->post('divulg_ajud')),
				'doacao_ajud' => intval($this->input->post('doacao_ajud')),
				'nome_ajud' => $this->input->post('nome_ajud'),
				'contato_ajud' => $this->input->post('contato_ajud'),
				'outro_ajud' => $this->input->post('outro_ajud'),
				'obs_ajud' => $this->input->post('obs_ajud'),
            );
           
            $ajudante_id = $this->Ajudante_model->add_ajudante($params);
            redirect("home/index");
        } else {            
            redirect("home/index");
        }
    }
}
