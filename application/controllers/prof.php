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
            $this->load->model('M_Prof');
            $dataList['profs'] = $this->M_Prof->lister();
            $dataLayout['vue'] = $this->load->view('lister',$dataList,true);
            //$dataLayout['titre'] = 'Accueil';
            //$dataLayout['profs'] = 'tableau des profs';
            $this->load->view('layout',$dataLayout);
	}
        
        public function voir()
        {
            
            $this->load->view('layout',$dataLayout);
        }
        
        public function test()
        {
            $this->load->view('test');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */