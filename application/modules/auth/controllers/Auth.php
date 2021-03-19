<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Auth_model');
    }
    

	public function index()
	{
        $data['error'] = $this->session->flashdata('error');
        $data['sections_view'] = "login_form_view";
        $this->load->view('layout_front_view',$data);
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $connection = $this->Auth_model->loginWhithAD($username,$password);
            if($connection){
                $user_data = $this->Auth_model->getUserInfo($username);
                if(in_array("CN=TODOS,CN=Users,DC=MEDIOAMBIENTE,DC=GOV,DC=AR",$user_data[0]['memberof'])){
                    $grupo_todos=true;
                }else{
                    $grupo_todos=false;
                }
                $newdata = array(
                    'username'  => $username,
                    'email'     => isset($user_data[0]['mail'][0])? $user_data[0]['mail'][0]:"",
                    'name'      => isset($user_data[0]['givenname'][0])? utf8_encode($user_data[0]['givenname'][0]):"",
                    'lastname'  => isset($user_data[0]['sn'][0])? utf8_encode($user_data[0]['sn'][0]):"",
                    'group'     => $grupo_todos,
                    'pin'       => isset($user_data[0]['wwwhomepage'][0])? $user_data[0]['wwwhomepage'][0]:false
                );
                $this->session->set_flashdata($newdata);
                redirect(base_url().'home','refresh');
            }else{
                $this->session->set_flashdata('error','El nombre de usuario o contraseña que ingresó no es correcto. Intenta ingresarlo nuevamente');
                redirect(base_url(),'refresh');
            }
        }else{
            redirect(base_url(),'refresh');
        }
    }
}