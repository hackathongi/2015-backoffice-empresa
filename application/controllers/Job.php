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
            $this->load->view('header');
            $this->load->view('jobList_view');
            $this->load->view('footer');
    }
    
    public function create(){
        $valid = validate_params();
 
        if ($valid){
            $params = get_params();
            $share = get_share();
            
            
            $created = $this->job->create($params);
            if($created){
                $shared = share($share);
                //TODO COmpartir con face/etc
                all();
            }else{
                
            }
            
        }else{
            index();
        }
    }
    
   
    
    private function share($share){
        
    }
    
    private function get_share(){
        $share['facebook'] = $_POST['facebook'];
        
        return $share;
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
        
        // TODO COMPARTIR CON QUIEN (CHECKBOX)
        
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
    
    
    
}
