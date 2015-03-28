<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        public function __construct()
        {
           parent::__construct();
           //$this->load->model('sport/user_model','user');
           //$this->load->model('sport/calendar_model','cal');
           //$this->load->model('sport/map_model','map');

           $this->load->model('welcome_model','welcome');
           
        }
    
	public function delete()
	{
            $this->session->sess_destroy();
            $this->load->view('login_view');
	}
}
