<?php
class Welcome_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }
    
    function test($data){
        $where_conditions = array(
            'email' => $data['email'],
            'pass'  => $data['password'],
        );
        
        $query = $this->db->get_where('usr', $where_conditions);
        if ($query->num_rows() > 0)
        {
           $row = $query->row(); 
           $session_datausr = array(
               'userid'     => $row->usrid,
               'username'   => $row->nombre,
               'usertipo'   => $row->tipousrid,
               'usermail'   => $row->email,
           );
           $this->session->set_userdata($session_datausr);
        }
    }
}