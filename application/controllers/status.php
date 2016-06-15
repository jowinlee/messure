 
 <?php
class Status extends CI_Controller {
		public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this ->load-> database();
		$this->load->model('stats_model');
		$this->load->helper('date');
       $this->load->library('pagination');
    } 
        public function index()
        {
			
			$this->load->view('statsview');
			
        }
		 public function entry(){
			 
			 $date = DateTime::createFromFormat("Y-m-d",date('Y-m-d'));
			  
			$year = $date->format("Y");
			$week = $date->format("W");
			$data = array(
            'sale' => $this->input->post('sale'),
            'invoice' =>$this->input->post('invoice'),
            'ringet'    =>$this->input->post('ringet'),
            'new_customer' =>$this->input->post('new_customer'),
			'year' =>$year,
			'week' =>$week
                );          
		    $this->stats_model->insertdata($data);
			redirect('status\index');
		}
		 
		function get_entry(){
			
			if ($query = $this->stats_model->get_record())
         {
            $results =array(); 
            $config = array();
            $config['base_url'] = base_url() . "status\get_entry";
            $config['total_rows'] = $this->stats_model->record_count();
            $config['per_page'] = 5;
            $config['uri_segment'] = 3;
            
            $config['last_link'] = 'Last';
            $config['first_link'] = 'First';
            
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            
            $data['results'] = $this->stats_model->get_all($config['per_page'], $page);       
            $data['links'] = $this->pagination->create_links();
            $data['errors']= ''; 
        }
         else {
            $data['errors']= ''; 
            $data['links']= '';
         }
        
        $this->load->view('statsview',$data); 
		}
}