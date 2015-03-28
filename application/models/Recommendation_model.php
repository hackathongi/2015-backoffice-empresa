<?php

/**
 * Class Recommendation_model
 *
 * id               int
 * description      String
 * completed        bool
 * numeric_rate     double
 * recommender_id   int     // user fk
 * job_id           int     // job fk
 */
class Recommendation_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }

    /**
     * Recupera una reccomendation
     * @param Array $recommendation_data
     * @return if exists return array, else false
     */
    function get($recommendation_data)
    {
        try{
            $query = $this->db->get_where('tbl_recommendation', $recommendation_data);
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}