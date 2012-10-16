<?php

class member extends CI_Controller {
    
    public function index(){
        $this->load->helper('form');
        $data['main_title'] = 'Adopter un prof - connexion';
        $data['vue'] = $this->load->view('member',$data,TRUE);
        $this->load->view('layout',$data);
    }
    
    public function login(){
        $this->load->model('M_Member');
        $data['mdp'] = $this->input->post('mdp');
        $data['email'] = $this->input->post('email');
        
        if($this->M_Member->verifier($data)){
            $this->session->set_userdata('logged_in',true);
            redirect('prof/lister');
        }
        else{
            redirect('error/mauvais_identifiant');
        }
    }
    
    public function deconnecter(){
        $this->session->unset_userdata('logged_in');
        redirect('member');
    }
}