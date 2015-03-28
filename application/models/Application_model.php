<?php

/**
 * Class Application_model
 *
 * id           Int
 * description  String
 * cv_url       String
 * user_id      int     // user fk
 * job_id       int     // job fk
 */

class Application_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }

    /**
     * Recupera un application
     * @param Array $application_data
     * @return if exists return array, else false
     */
    function get($application_data)
    {
        try{
            $query = $this->db->get_where('tbl_application', $application_data);
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

    /**
     * Recupera la url d'un cv
     * @param Array $application_data
     * @return if exists return array, else false
     */
    function get_cv($application_data)
    {
        try{
            $this->db->get_where('tbl_application.cv_url');
            $query = $this->db->get_where('tbl_application', $application_data);
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