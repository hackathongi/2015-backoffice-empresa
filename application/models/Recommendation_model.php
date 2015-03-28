<?php

/**
 * Class Recommendation_model
 *
 * id           int
 * description  String
 * completed    bool
 * numeric_rate double
 * recommender_id int // user fk
 * job_id           int // job fk
 */
class Recommendation_model extends CI_Model {

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