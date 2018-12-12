<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
        autoriza();
        $data['financeiro'] = $this->Financeiro_model->get_all_financeiro();
        $data['dog_adot'] = $this->Catioro_model->count_catioro_adotado();
        $data['dog_count'] = $this->Catioro_model->count_catioro();
        $data['dog_hosp'] = $this->Catioro_model->count_catioro_hosp();
        $data['count_ajud'] = $this->Ajudante_model->count_ajud();
        $this->load->view('dashboard/index', $data);
    }
    // --------------------AUTENTICACAO!----------------------------
    
    public function login(){
        if($this->session->userdata('nome_login')){
            redirect('dashboard/index');
        } 
        $this->load->view('dashboard/login');
    }
    
    public function logout(){
        autoriza();
        $keys = array('nv_login', 'nome_login');
        $this->session->unset_userdata($keys);
        $this->load->view('dashboard/login');
    }
    
    public function logar(){
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('user_login') != '' && $this->input->post('senha_login') != '') {
            $data['login'] = $this->Login_model->enter($this->input->post('user_login'), $this->input->post('senha_login'));
            if(isset($data['login']['id_login'])){
                $data["status"] = 1;//OK
                $data["id_login"] = $data['login']['id_login'];
                $data["nv_login"] = $data['login']['nv_login'];
                $data['financeiro'] = $this->Financeiro_model->get_all_financeiro();
                $data['dog_adot'] = $this->Catioro_model->count_catioro_adotado();
                $data['dog_count'] = $this->Catioro_model->count_catioro();
                $data['dog_hosp'] = $this->Catioro_model->count_catioro_hosp();
                $data['count_ajud'] = $this->Ajudante_model->count_ajud();
                
                $arraydata = array(
                    'nv_login'   => $data['login']['nv_login'],
                    'nome_login' => $data['login']['nome_login']
                );
                $ci = get_instance();
                $this->session->set_userdata($arraydata);
                
                if($data['login']['senha_login']=="ufscaodefaultpass"){
                    $this->load->view('dashboard/user-warning', $data);
                } else {
                    $this->load->view('dashboard/index', $data);
                }
            } else {
                $data["status"] = 0;//user não existente
                $this->load->view('dashboard/login', $data);
            }
        } else {
            $data["status"] = 2;//dados não preenchidos
            $this->load->view('dashboard/login', $data);
        }
    }
    
    public function user_list(){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        $data['login'] = $this->Login_model->get_all_login();
        $this->load->view('dashboard/user-list', $data);
    } 
    
    public function user_form_add(){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        $data["action_form"] = base_url()."index.php/dashboard/user_add";
        $data["crud"] = "Cadastrar";
        $data["user_login"] = 0;
		$data["contato_login"] = 0;
        $data["nome_login"] = 0;
        $this->load->view('dashboard/user-form', $data);
    }
    
    public function user_form_edit($id_login=-1){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        $data['login'] = $this->Login_model->get_login($id_login);
        
        if(isset($data['login']['id_login'])) {
            $data2["action_form"] = base_url()."index.php/dashboard/user_edit/".$id_login;
            $data2["crud"] = "Salvar";
            $data2["user_login"] = $data['login']['user_login'];
            $data2["contato_login"] = $data['login']['contato_login'];
            $data2["nome_login"] = $data['login']['nome_login'];
            $this->load->view('dashboard/user-form', $data2);
        } else {
            $data['status'] = 0;//ERRO
            $data['login'] = $this->Login_model->get_all_login();
            $this->load->view('dashboard/user-list', $data);
        }
    }
    
    public function user_edit($id_login=-1){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        // check if the login exists before trying to edit it
        $data['login'] = $this->Login_model->get_login($id_login);
        
        if(isset($data['login']['id_login'])) {
            if(isset($_POST) && count($_POST) > 0 && $data['login']['nv_login'] != "1" && $this->input->post('user_login') != '' && $this->input->post('contato_login') != '' && $this->input->post('nome_login') != '') {   
                $params = array(
					'user_login' => $this->input->post('user_login'),
					'contato_login' => $this->input->post('contato_login'),
					'nome_login' => $this->input->post('nome_login'),
                );

                $this->Login_model->update_login($id_login,$params);            
                $data['status'] = 1; //OK
                $data['login'] = $this->Login_model->get_all_login();
                $this->load->view('dashboard/user-list', $data);
            } else {
                $data['status'] = 0; //ERRO
                $data['login'] = $this->Login_model->get_all_login();
                $this->load->view('dashboard/user-list', $data);
            }
        } else show_error('The login you are trying to edit does not exist.');
    
    }
    
    public function user_reset_passwd($id_login=-1){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        // check if the login exists before trying to edit it
        $data['login'] = $this->Login_model->get_login($id_login);
        
        if(isset($data['login']['id_login']) && $data['login']['nv_login'] != "1") {
                $params = array(
					'senha_login' => "ufscaodefaultpass",
                );

                $this->Login_model->update_login($id_login,$params);            
                $data['login'] = $this->Login_model->get_all_login();
                $data['status'] = 1; //OK
                $this->load->view('dashboard/user-list', $data);
        } else show_error('The login you are trying to edit does not exist.');
    
    }
    
    public function user_form_warning($id_login=-1){
         autoriza();
        
         if($id_login != -1){
            $data['login'] = $this->Login_model->get_login($id_login);
            
            if(isset($data['login']['id_login']) && $data['login']['nv_login'] != "1") {
                if($this->session->userdata('nome_login') != $data['login']['nome_login']){
                    redirect("dashboard/index");
                }
                $data["id_login"] = $id_login;
                $this->load->view('dashboard/user-warning', $data);
            } else {
                $this->load->view('dashboard/login');
            }
             
         } else {
            $this->load->view('dashboard/login');
         }
    }
    
    public function user_change_passwd($id_login=-1){
        autoriza();
        // check if the login exists before trying to edit it
        $data['login'] = $this->Login_model->get_login($id_login);
        
        if(isset($data['login']['id_login'])) {
            if(isset($_POST) && count($_POST) > 0 && $data['login']['nv_login'] != "1" && $this->input->post('senha_login') != '' && $this->input->post('senha_login2') != ''){
                if($this->session->userdata('nome_login') != $data['login']['nome_login']){
                    redirect("dashboard/index");
                }
                $params = array(
                    'senha_login' => $this->input->post('senha_login'),
                );
                if($this->input->post('senha_login') != $this->input->post('senha_login2')){
                    $data["id_login"] = $id_login;
                    $this->load->view('dashboard/user-warning', $data);
                } else {
                    $this->Login_model->update_login($id_login,$params);            
                    $this->load->view('dashboard/login');
                }
            } else {           
                $this->load->view('dashboard/login');
            }
        } else show_error('The login you are trying to edit does not exist.');
    
    }
    
    public function user_del($id_login=-1){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        $login = $this->Login_model->get_login($id_login);

        // check if the login exists before trying to delete it
        if(isset($login['id_login']) && $login['nv_login'] != "1") {
            $this->Login_model->delete_login($id_login);
            redirect('dashboard/user_list');
        } else show_error('The login you are trying to delete does not exist.');
    }
    
    public function user_add(){
        autoriza();
        if($this->session->userdata('nv_login') != "1"){
            redirect("dashboard/index");
        }
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('user_login') != '' && $this->input->post('contato_login') != '' && $this->input->post('nome_login') != '') {   
            $params = array(
				'user_login' => $this->input->post('user_login'),
				'senha_login' => "ufscaodefaultpass",
				'contato_login' => $this->input->post('contato_login'),
				'nome_login' => $this->input->post('nome_login'),
				'nv_login' => 0,
            );
            $login = $this->Login_model->get_user_login($this->input->post('user_login'));
            if(isset($login['user_login'])) {
                redirect("dashboard/user_form_add");
            } else {
                $login_id = $this->Login_model->add_login($params);
                $data['login'] = $this->Login_model->get_all_login();
                $this->load->view('dashboard/user-list', $data);    
            }
        } else {
            redirect("dashboard/user_form_add");
        }
    }
    
    // --------------------CACHOLO!-------------------------------
    public function dog(){
        autoriza();
        $data['catioro'] = $this->Catioro_model->get_all_catioro();
        $this->load->view('dashboard/dog-list', $data);
    }
    
    public function dog_form_edit($id=-1){
        autoriza();
        $data_db = $this->Catioro_model->get_catioro($id);
        
        if(isset($data_db['id_cat'])) {
            $data["action_form"] = base_url()."index.php/dashboard/dog_edit/".$id;
            $data["method_form"] = "post";
            $data["crud"] = "Salvar";
            $data["sexo_cat"] = $data_db["sexo_cat"];
            $data["castrado_cat"] = $data_db["castrado_cat"];
            $data["vacinado_cat"] = $data_db["vacinado_cat"];
            $data["nome_cat"] = $data_db["nome_cat"];
            $data["idade_cat"] = $data_db["idade_cat"];
            $data["status_cat"] = $data_db["status_cat"];
            $data["port_cat"] = $data_db["port_cat"];
            $data["status_desc_cat"] = $data_db["status_desc_cat"];
            $data["obs_cat"] = $data_db["obs_cat"];
            $data["id"] = $id;
            
            $this->load->view('dashboard/dog-form', $data);
        } else {
            redirect('dashboard/dog');
        }
    }
    
    public function dog_edit($id_cat=-1){
        autoriza();
        // check if the catioro exists before trying to edit it
        $data['catioro'] = $this->Catioro_model->get_catioro($id_cat);
        if(isset($data['catioro']['id_cat'])) {
            if(isset($_POST) && count($_POST) > 0 && $this->input->post('port_cat') >= 0 && intval($this->input->post('sexo_cat')) >= 0 && $this->input->post('castrado_cat') != '' && $this->input->post('vacinado_cat') != '' && $this->input->post('nome_cat') != '' && intval($this->input->post('idade_cat')) >= 0) {   
                $params = array(
					'sexo_cat' => $this->input->post('sexo_cat'),
					'castrado_cat' => $this->input->post('castrado_cat'),
					'vacinado_cat' => $this->input->post('vacinado_cat'),
					'nome_cat' => $this->input->post('nome_cat'),
					'idade_cat' => $this->input->post('idade_cat'),
                    'port_cat' => $this->input->post('port_cat'),
					'obs_cat' => $this->input->post('obs_cat'),
                );
                if ( $_FILES['image']['error'] > 0 ) {} else {
                    move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/dogs/".$id_cat.".png");  
                }
                $this->Catioro_model->update_catioro($id_cat,$params); 
                $data['catioro'] = $this->Catioro_model->get_all_catioro();
                $this->load->view('dashboard/dog-list', $data);
            } else { 
                redirect('dashboard/dog_form_edit/'.$id_cat); 
            }
        } else show_error('The catioro you are trying to edit does not exist.');
    }
    
    public function dog_form_add(){
        autoriza();
        $data["action_form"] = base_url()."index.php/dashboard/dog_add";
        $data["method_form"] = "post";
        $data["crud"] = "Cadastrar";
        $data["sexo_cat"] = 0;
		$data["castrado_cat"] = 0;
		$data["vacinado_cat"] = 0;
		$data["nome_cat"] = 0;
		$data["idade_cat"] = 0;
		$data["obs_cat"] = 0;
        $data["id"] = 0;
        
        $this->load->view('dashboard/dog-form', $data);
    }
    
    public function dog_add(){
        autoriza();
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('port_cat') >= 0 && intval($this->input->post('sexo_cat')) >= 0 && $this->input->post('castrado_cat') != '' && $this->input->post('vacinado_cat') != '' && $this->input->post('nome_cat') != '' && intval($this->input->post('idade_cat')) >= 0) {   
            $params = array(
                'sexo_cat' => $this->input->post('sexo_cat'),
                'castrado_cat' => $this->input->post('castrado_cat'),
                'vacinado_cat' => $this->input->post('vacinado_cat'),
                'port_cat' => $this->input->post('port_cat'),
                'nome_cat' => $this->input->post('nome_cat'),
                'idade_cat' => $this->input->post('idade_cat'),
                'status_cat' => 0,
                'status_desc_cat' => '',
                'obs_cat' => $this->input->post('obs_cat'),
            );
            if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
            } else {
                $catioro_id = $this->Catioro_model->add_catioro($params);
                move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/dogs/".$catioro_id.".png");
            }
        }
    }
    
    public function dog_del($id_cat=-1){
        autoriza();
        $catioro = $this->Catioro_model->get_catioro($id_cat);

        // check if the catioro exists before trying to delete it
        if(isset($catioro['id_cat'])) {
            $this->Catioro_model->delete_catioro($id_cat);
            unlink("imgs/dogs/".$id_cat.".png");
            redirect('dashboard/dog');
        } else show_error('The catioro you are trying to delete does not exist.');
    }

    public function dog_info($id_cat=-1) {
        autoriza();
        $catioro = $this->Catioro_model->get_catioro($id_cat);
        
        // check if the catioro exists before trying to delete it
        if(isset($catioro['id_cat'])) {
            $data['ajudante'] = $this->Ajudante_model->get_all_ajudante(); 
        
            $data["sexo_cat"] = $catioro["sexo_cat"];
            $data["castrado_cat"] = $catioro["castrado_cat"];
            $data["vacinado_cat"] = $catioro["vacinado_cat"];
            $data["nome_cat"] = $catioro["nome_cat"];
            $data["idade_cat"] = $catioro["idade_cat"];
            $data["status_cat"] = $catioro["status_cat"];
            $data["port_cat"] = $catioro["port_cat"];
            $data["status_desc_cat"] = $catioro["status_desc_cat"];
            $data["obs_cat"] = $catioro["obs_cat"];
            $data["id"] = $id_cat;
            $this->load->view('dashboard/dog-info', $data);
        } else show_error('The catioro you are trying to show does not exist.');
    }
    
    public function dog_info_edit() {
        autoriza();
        $id_cat = $this->input->post('id');
        $catioro = $this->Catioro_model->get_catioro($id_cat);

        // check if the catioro exists before trying to delete it
        if(isset($catioro['id_cat'])) {
            if(isset($_POST) && count($_POST) > 0 && intval($this->input->post('status_cat')) >= 0) { 
                $desc = "";
                if($this->input->post('status_cat')=="1"){
                    $desc=$this->input->post('status_desc_cat-0');
                }
                
                if($this->input->post('status_cat')=="2"){
                    $desc=$this->input->post('status_desc_cat-1');
                }
                
                if($this->input->post('status_cat')=="3"){
                    $desc=$this->input->post('status_desc_cat-2');
                }
                
                $params = array(
					'status_cat' => $this->input->post('status_cat'),
					'status_desc_cat' => $desc,
                );
                
                $this->Catioro_model->update_catioro($id_cat,$params); 
                $data['status'] = 1;
                $data['catioro'] = $this->Catioro_model->get_all_catioro();
                $this->load->view('dashboard/dog-list', $data);
            } else {
                $data['status'] = 0;
                $data['catioro'] = $this->Catioro_model->get_all_catioro();
                $this->load->view('dashboard/dog-list', $data);
            }
        } else show_error('The catioro you are trying to delete does not exist.');
    }
    
    // --------------------EVENTOS!-------------------------------
    public function eventos($offset=0) {
        autoriza();
        $data['offset'] = $offset;
        $data['eventos'] = $this->Evento_model->get_all_eventos_with_offset($offset);     
        
        $this->load->view('dashboard/eventos', $data);
    }
    
    public function eventos_form_add() {
        autoriza();
        $data["action_form"] = base_url()."index.php/dashboard/eventos_add";
        $data["method_form"] = "post";
        $data["crud"] = "Cadastrar";
        $data["data_hora_evt"] = 0;
        $data["titulo_evt"] = 0;
        $data["desc_evt"] = 0;
        $data["id"] = 0;
        $this->load->view('dashboard/eventos-form', $data);
    }
    
    public function eventos_add() {
        autoriza();
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('data_hora_evt') != '' && $this->input->post('titulo_evt') != '' && $this->input->post('desc_evt') != '') {   
            $params = array(
				'data_hora_evt' => $this->input->post('data_hora_evt'),
				'titulo_evt' => $this->input->post('titulo_evt'),
				'desc_evt' => $this->input->post('desc_evt'),
            );
            
            if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
            } else {
                $evento_id = $this->Evento_model->add_evento($params);
                move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/eventos/".$evento_id.".png");
            }
        }
    }
    
    public function eventos_form_edit($id=-1) {
        autoriza();
        $data_db = $this->Evento_model->get_evento($id);
        
        $data["action_form"] = base_url()."index.php/dashboard/eventos_edit/";
        $data["method_form"] = "post";
        $data["crud"] = "Salvar";
        $data["data_hora_evt"] = $data_db['data_hora_evt'];
        $data["titulo_evt"] = $data_db['titulo_evt'];
        $data["desc_evt"] = $data_db['desc_evt'];
        $data["id"] = $id;
        
        $this->load->view('dashboard/eventos-form', $data);
    }
    
    public function eventos_edit($id_evt=-1) {
        autoriza();
        // check if the evento exists before trying to edit it
        $data['evento'] = $this->Evento_model->get_evento($id_evt);
        
        if(isset($data['evento']['id_evt']))
        {
            if(isset($_POST) && count($_POST) > 0 && $this->input->post('data_hora_evt') != '' && $this->input->post('titulo_evt') != '' && $this->input->post('desc_evt') != '') {   
                $params = array(
					'data_hora_evt' => $this->input->post('data_hora_evt'),
					'titulo_evt' => $this->input->post('titulo_evt'),
					'desc_evt' => $this->input->post('desc_evt'),
                );
                
                if ( $_FILES['image']['error'] > 0 ) {} else {
                    move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/eventos/".$id_evt.".png");  
                }
                
                $this->Evento_model->update_evento($id_evt,$params);
            } else { }
        } else show_error('The evento you are trying to edit does not exist.');
    
    }
    
    public function eventos_del($id_evt=-1) {
        autoriza();
        $evento = $this->Evento_model->get_evento($id_evt);

        // check if the evento exists before trying to delete it
        if(isset($evento['id_evt'])){
            $this->Evento_model->delete_evento($id_evt);
            unlink("imgs/eventos/".$id_evt.".png");
            redirect('dashboard/eventos');
        } else show_error('The evento you are trying to delete does not exist.');
    }
    
    
    // --------------------FINANCEIRO!----------------------------
/*    public function financeiro() {
        autoriza();
        $data['financeiro'] = $this->Financeiro_model->get_all_financeiro();
        $this->load->view('dashboard/financeiro', $data);
    } */
    
    public function financeiro_del($id_fin=-1) {
        autoriza();
        $financeiro = $this->Financeiro_model->get_financeiro($id_fin);

        // check if the financeiro exists before trying to delete it
        if(isset($financeiro['id_fin']))
        {
            $this->Financeiro_model->delete_financeiro($id_fin);
            redirect('dashboard/index');
        }
        else
            show_error('The financeiro you are trying to delete does not exist.');
        
    }
    
    public function financeiro_form_add() {
        autoriza();
        $this->load->view('dashboard/financeiro-form');
    }
    
    public function financeiro_add() {
        autoriza();
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('nome_fin') != '' && $this->input->post('custo_fin') != '') {   
            $params = array(
				'nome_fin' => $this->input->post('nome_fin'),
				'custo_fin' => $this->input->post('custo_fin'),
            );
            
            $financeiro_id = $this->Financeiro_model->add_financeiro($params);
            $data['financeiro'] = $this->Financeiro_model->get_all_financeiro();
            $data['dog_adot'] = $this->Catioro_model->count_catioro_adotado();
            $data['dog_count'] = $this->Catioro_model->count_catioro();
            $data['dog_hosp'] = $this->Catioro_model->count_catioro_hosp();
            $data['count_ajud'] = $this->Ajudante_model->count_ajud();
            $this->load->view('dashboard/index', $data);
        }
        else {            
            $data['financeiro'] = $this->Financeiro_model->get_all_financeiro();
            $data['dog_adot'] = $this->Catioro_model->count_catioro_adotado();
            $data['dog_count'] = $this->Catioro_model->count_catioro();
            $data['dog_hosp'] = $this->Catioro_model->count_catioro_hosp();
            $data['count_ajud'] = $this->Ajudante_model->count_ajud();
            $this->load->view('dashboard/index', $data);
        }
    }
    
    // --------------------AJUDANTES!------------------------------
    public function ajudantes(){
        autoriza();
        $this->load->view('dashboard/ajudantes');
    }
    
    public function ajaxAjudantes(){
        autoriza();
        $data = $this->Ajudante_model->get_all_ajudante();
        //Seta o header!
        header('Content-Type: application/json');
        //Devolve para a aplicação!
        echo json_encode($data);
    }
    
    public function helpers_del($id_ajud=-1){
        autoriza();
        $ajudante = $this->Ajudante_model->get_ajudante($id_ajud);

        // check if the ajudante exists before trying to delete it
        if(isset($ajudante['id_ajud'])) {
            $this->Ajudante_model->delete_ajudante($id_ajud);
            redirect('dashboard/ajudantes');
        }
        else
            show_error('The ajudante you are trying to delete does not exist.');
    }
    
    // --------------------PARCEIROS!------------------------------
    public function parceiros(){
        autoriza();
        $data['parceiros'] = $this->Parceiro_model->get_all_parceiros();
        $this->load->view('dashboard/parceiros', $data);
    }
  
    public function parceiros_form_add(){
        $data["action_form"] = base_url()."index.php/dashboard/partner_add";
        $data["method_form"] = "post";
        $data["crud"] = "Cadastrar";
        $data["nome_parc"] = 0;
        $data["url_parc"] = 0;
        $data["id_parc"] = 0;
      
        $this->load->view('dashboard/parceiros-form', $data);
    }
  
    public function parceiros_form_edit(){
          autoriza();
          $id = $this->input->get('id');
          $data_db = $this->Parceiro_model->get_parceiro($id);
          
          $data["action_form"] = base_url()."index.php/dashboard/partner_edit";
          $data["method_form"] = "post";
          $data["crud"] = "Salvar";
          $data["nome_parc"] = $data_db['nome_parc'];
          $data["url_parc"] = $data_db['url_parc'];
          $data["id_parc"] = $id;
          $this->load->view('dashboard/parceiros-form', $data);
      
    }
  
    public function partner_edit(){
        autoriza();
        // check if the parceiro exists before trying to edit it
        $id_parc = $this->input->post('id_parc');
        $data['parceiro'] = $this->Parceiro_model->get_parceiro($id_parc);
        
        if(isset($data['parceiro']['id_parc'])){
            if(isset($_POST) && count($_POST) > 0 && $this->input->post('nome_parc') != '' && $this->input->post('url_parc') != '') {   
                  $params = array(
                    'nome_parc' => $this->input->post('nome_parc'),
                    'url_parc' => $this->input->post('url_parc'),
                  );
                  if ( $_FILES['image']['error'] > 0 ) {} else {
                    move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/parceiros/".$id_parc.".png");  
                  }
                  if ($params['nome_parc'] == '' || $params['url_parc'] == '') {
                     redirect("dashboard/parceiros_form_add");
                  }
                  var_dump($_POST);
                  $this->Parceiro_model->update_parceiro($id_parc, $params);
                  $data["status"] = "Parceiro ".$params['nome_parc']." editado com sucesso!";  
                  
            } else {
                  $data["action_form"] = base_url()."index.php/dashboard/partner_edit";
                  $data["method_form"] = "post";
                  $data["crud"] = "Salvar";
                  $data["nome_parc"] = $params['nome_parc'];
                  $data["url_parc"] = $params['url_parc'];
                  $data["id_parc"] = $id_parc;
            }
        } else show_error('The parceiro you are trying to edit does not exist.'. $this->input->post('id_parc'));
    }
  
    public function partner_add(){
        autoriza();
        if(isset($_POST) && count($_POST) > 0 && $this->input->post('nome_parc') != '' && $this->input->post('url_parc') != '') {   
            $params = array(
              'nome_parc' => $this->input->post('nome_parc'),
              'url_parc' => $this->input->post('url_parc')
            );
            
            if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
            } else {
                $parceiro_id = $this->Parceiro_model->add_parceiro($params);
                move_uploaded_file ($_FILES['image']['tmp_name'] , "imgs/parceiros/".$parceiro_id.".png");
                $data["status"] = "Parceiro ".$params['nome_parc']." cadastrado com sucesso!";
            }
        } else { 
            redirect("dashboard/parceiros");
        }
    }

    public function partner_del(){
        autoriza();
        $id_parc = $this->input->get('id');
        $parceiro = $this->Parceiro_model->get_parceiro($id_parc);

        // check if the parceiro exists before trying to delete it
        if(isset($parceiro['id_parc'])) {
            $this->Parceiro_model->delete_parceiro($id_parc);
            unlink("imgs/parceiros/".$id_parc.".png");
            redirect("dashboard/parceiros");
        }
        else show_error('The parceiro you are trying to delete does not exist.');
    }
    
    public function adote(){
        $data['adote'] = $this->Adote_model->get_all_adote();
        $this->load->view('dashboard/adocao', $data);
    }
    
    public function del_adocao($id_adote = -1){
         $adote = $this->Adote_model->get_adote($id_adote);

        // check if the adote exists before trying to delete it
        if(isset($adote['id_adote'])) {
            $this->Adote_model->delete_adote($id_adote);
            redirect('dashboard/adote');
        } else show_error('The adote you are trying to delete does not exist.');
        
    }
  
}
