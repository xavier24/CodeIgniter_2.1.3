<?php

    class M_Prof extends CI_Model
    {
        public function lister()
	{
            $this->db->select('profs.*, specs.nom as specialite, specs.spec_id as sspec_id');
            $this->db->from('profs');
            $this->db->join('specs','profs.spec_id = specs.spec_id');
            
           
            $query = $this->db->get();
            return $query->result();
                    
	}
        
        public function voir($id)
        {
            $this->db->select('profs.*, specs.nom as specialite, specs.spec_id as sspec_id');
            $this->db->from('profs');
            $this->db->join('specs','profs.spec_id = specs.spec_id');
            $this->db->where('profs.prof_id',$id);
            
            $query = $this->db->get();
            return $query->row();
        }
        
        public function listerSpec($idSpec)
	{
            $this->db->select('profs.*, specs.nom as specialite, specs.spec_id as sspec_id');
            $this->db->from('profs');
            $this->db->join('specs','profs.spec_id = specs.spec_id');
            $this->db->where('profs.spec_id',$idSpec);
            
            $query = $this->db->get();
            return $query->result();
                    
	}
    }
