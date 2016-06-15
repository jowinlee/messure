 
 <?php
class Status extends CI_Controller {
		public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this ->load-> database();
		$this->load->model('stats_model');
		$this->load->helper('date');
       
    } 
        public function index()
        {
			
			$this->load->view('statsview');
			
        }
		 public function entry(){
			 $date = DateTime::createFromFormat("Y-m-d", "2068-06-15");
			 
			 $year = $date->format("Y");
			$data = array(
            'sale' => $this->input->post('sale'),
            'invoice' =>$this->input->post('invoice'),
            'ringet'    =>$this->input->post('ringet'),
            'new_customer' =>$this->input->post('new_customer'),
			'year' =>$year
                );          
		    $this->stats_model->insertdata($data);
			redirect('status\index');
		}
		 
		
}