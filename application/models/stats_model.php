<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Stats_model extends CI_Model 
{
     function __construct() {
        parent::__construct();
        $this -> load -> database();
		$this->load->helper('date');
    }

    function get_all_posts() 
	{
        //get all entry

        //get all entry, sort by latest to oldest

        

        $query = $this -> db -> get('status');

        return $query -> result();

    }        		
	function insertdata($data)
	{
       $this->db->insert('status',$data);
       return;
	}
}
