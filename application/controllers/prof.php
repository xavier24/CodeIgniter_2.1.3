<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prof extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public function index()
        {
            $this->lister();
        }


        public function lister()
	{
            $uri= $this->uri->segment(3);
            if($uri=="spec")
            {
                $this->load->model('M_Prof');
                $idSpec = $this->uri->segment(4);
                $dataList['profs'] = $this->M_Prof->listerSpec($idSpec);
                $dataLayout['vue'] = $this->load->view('lister',$dataList,true);
                $dataLayout['titre'] = 'Liste des profs de '.$dataList['profs'][0]->specialite;
                //$dataLayout['profs'] = 'tableau des profs';

                $this->load->view('layout',$dataLayout);
            }
            else
            {
                $this->load->model('M_Prof');
                $dataList['profs'] = $this->M_Prof->lister();
                $dataLayout['vue'] = $this->load->view('lister',$dataList,true);
                $dataLayout['titre'] = 'Liste des profs';
                //$dataLayout['profs'] = 'tableau des profs';

                $this->load->view('layout',$dataLayout);
            }
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
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */