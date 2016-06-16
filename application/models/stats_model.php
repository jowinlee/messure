<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Stats_model extends CI_Model 
{
     function __construct() {
        parent::__construct();
        $this -> load -> database();
		$this->load->helper('date');
    }

    function get_all($limit, $start) 
	{
        //get all entry

        //get all entry, sort by latest to oldest

        
		$this->db->limit($limit, $start);
		 $this->db->select('*');
         $this->db->from('status'); 
        $query = $this->db->get();

         if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

    } 

	function get_record() 
	{
      	    
      	$query = $this->db->get('status');
		        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	
	function record_count() {
        
        $query = $this->db->get('status');
        return $query->num_rows();
    }
    
	function insertdata($data)
	{
       $this->db->insert('status',$data);
       return;
	}
	
	
}
