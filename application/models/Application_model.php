<?php

/**
 * Class Application_model
 *
 * id           Int
 * description  String
 * cv_url       String
 * user_id      int
 * job_id       int
 */

class Application_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }

    function getApplication($id)
    {
        try{
            $where_conditions = array('id' => $id);

            $query = $this->db->get_where('tbl_application', $where_conditions);
            return $query->row_array();
        } catch (Exception $e) {
            echo get_class(),  $e->getMessage(), "\n";
        }
    }
}