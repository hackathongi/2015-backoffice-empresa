<?php
/**
 * Description of Oferta
 *
 * @author maru-laptop
 */
class Job extends CI_Controller {
    //put your code here
    
    public function __construct()
    {
       parent::__construct();
       //$this->load->model('sport/user_model','user');
       //$this->load->model('sport/calendar_model','cal');
       //$this->load->model('sport/map_model','map');

       $this->load->helper('form');
       $this->load->model('job_model','job');

    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('jobCreation_view');
        $this->load->view('footer');
    }
    
    public function all()
    {       
        $job_data['owner_id'] = $this->session->userdata('user_id');
        $jobs_list = $this->job->get($job_data);
        
        foreach ($jobs_list as $key => $value){
           //$job_id = $key;
           //$job_id = $value['id'];
            $job_appliers = $this->job->get_number_appliers($job_id);
            $value['appliers'] = $job_appliers;
        }
        
        $this->load->view('header');
        $this->load->view('jobList_view', $jobs_list);
        $this->load->view('footer');
    }
    
    public function detail($id)
    {     
        $jobId['id'] = $id;
        $jobDetail = $this->job->get($jobId);
        
        
        $this->load->view('header');
        $this->load->view('jobDetail_view', $jobDetail);
        $this->load->view('footer');
    }
    
    public function error($data)
    {
        $this->load->view('header');
        $this->load->view('error_view', $data);
        $this->load->view('footer');
    }
    
    public function create(){
        $valid = $this->validate_params();
 
        if ($valid){
            $params = $this->get_params();            
            $created = $this->job->create($params);
            if($created){
                $shared = $this->share($params);
                all();
            }else{
               error("Ops! Database error!"); 
            }
            
        }else{
            $this->index();
        }
    }
    
    private function share(){
        //TODO ADAPTER a los parametros facebook API! y compartir
    }
    

    private function get_params(){
        $params['title'] = $_POST['title'];
        $params['description'] = $_POST['description'];
        $params['start_date'] = $_POST['start_date'];//TODO formato data
        $params['end_date'] = $_POST['end_date'];
        $params['city'] = $_POST['city'];
        
        if (isset($_POST['latitude']))
            $params['latitude'] = $_POST['latitude'];
        else
            $params['latitude'] = "";
        if (isset($_POST['longitude']))
            $params['longitude'] = $_POST['longitude'];
        else
            $params['longitude'] = "";

        if (isset($_POST['picture_url']))
            $params['picture_url'] = $_POST['picture_url'];
        else
            $params['picture_url'] = "";

        $params['owner_id'] = $this->session->userdata('user_id');
                
        return $params;
    }
    
    private function validate_params(){
        $this->form_validation->set_rules('title', 'Títol', 'required');
        $this->form_validation->set_rules('description', 'Descripció', 'required');
        $this->form_validation->set_rules('start_date', 'Data inici', 'required');
        $this->form_validation->set_rules('end_date', 'Data fi', 'required');
        $this->form_validation->set_rules('city', 'Ciutat', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }
    /*
    public function detail(){
        $jobs = array();
        $id['id']=$this->session->userdata('user_id');
        $jobs_list = $this->job->get($id);
        $jobs_list_with_appliers = array();
        
        $i=0;
        foreach($jobs_list as $key=>$value){
           $jobs_list_with_appliers[$i] = $key;
           $jobs_list_with_appliers[$key];
           $i++;
           //           $jobs_list_with_appliers['appliers'] = $this->job->get_number_appliers($key);  

        }
        $this->load->view('header');
        $this->load->view('error_view', $job_list);
        $this->load->view('footer');
    }*/
    
}
