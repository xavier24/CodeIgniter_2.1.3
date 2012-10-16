<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prof extends CI_Controller {
    
    
        public function index()
        {
            $this->lister();
        }


        public function lister()
	{
            $uri= $this->uri->segment(3);
            $dataList['deja_adoptes'] = $this->session->userdata('deja_adoptes');
           
            $this->load->model('M_Prof');
            
            if($uri=="spec")            
            {
                
                $idSpec = $this->uri->segment(4);
                $dataList['profs'] = $this->M_Prof->listerSpec($idSpec);
                $dataList['titre'] = 'Liste des profs de '.$dataList['profs'][0]->specialite;
            }
            else
            {
                $dataList['profs'] = $this->M_Prof->lister();
                $dataList['titre'] = 'Liste des profs';
            } 
            
            $dataLayout['vue'] = $this->load->view('lister',$dataList,true);
            $this->load->view('layout',$dataLayout);
	}
        
              
        public function voir()
        {
            
            $this->load->model('M_Prof');
            $idProf = $this->uri->segment(3);
            $dataProf['prof'] = $this->M_Prof->voir($idProf);
            $dataLayout['vue'] = $this->load->view('voir',$dataProf,true);
            $dataLayout['titre'] = "Fiche de ".$dataProf['prof']->prenom." ".$dataProf['prof']->nom;
            
            $this->load->view('layout',$dataLayout);
        }
        
        
        
        public function adopte()
        {
            $id= $this->uri->segment(3);
            $this->load->model('M_Prof');
            $prof = $this->M_Prof->voir($id);
            $deja_adoptes = $this->session->userdata('deja_adoptes')? $this->session->userdata('deja_adoptes') :array();
            $deja_adoptes[$id] = $prof;
            $this->session->set_userdata(array('deja_adoptes'=>$deja_adoptes));
            
            redirect('/prof/lister');
            //redirect($this->session->flashdata('current_url'));
        }
        
        public function libere()
        {
            $id= $this->uri->segment(3);
            $deja_adoptes_tmp = $this->session->userdata('deja_adoptes');
            unset($deja_adoptes_tmp[$id]);
            $this->session->unset_userdata('deja_adoptes');
            $this->session->set_userdata('deja_adoptes',$deja_adoptes_tmp);
            
            redirect('/prof/lister');
            //redirect($this->session->flashdata('current_url'));
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */