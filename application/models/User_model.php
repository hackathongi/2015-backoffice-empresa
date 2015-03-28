<?php

/**
 * Class User_model
 *
 * id int   int
 * name     String
 * email    String
 * token    String
 * role     int
 */

class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }

    /**
     * Recupera un user
     * @param Array $user_data
     * @return if exists return array, else false
     */
    function get($user_data)
    {
        try{
            $query = $this->db->get_where('tbl_user', $user_data);
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
     * Recupera les amistats en comú de dos users
     * @param Array $data
     * @return if exists return array, else false

     */
    function get_common_friends($data)
    {
        try{
            $provider = "facebook";
            $user1 = $data['user1_id'];
            $user2 = $data['user2_id'];
            $base_url = "//apisocial.wallyjobs.com/friends";

            $url = $base_url."/".$provider."/".$user1."/".$user2;

            $response = http_get($url, array("timeout"=>1), $info);

            $jsonList = json_decode($info);

            return $jsonList;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Recupera les recomanacions d'un usuari en una job
     * @param Array $data
     * @return if exists return array, else false
     */
    /*
     *      select * from tbl_recommendation r
            join tbl_application a on r.application_id = a.user_id
            where a.job_id = 3 and a.user_id = 1;
     */
    function get_recommendations($data)
    {
        // TODO Specify return elements
        try{
            $job_id = $data['job_id'];
            $user_id  = $data['user_id'];

            $this->db->select('*');
            $this->db->from('tbl_recommendation');
            $this->db->join('tbl_application', 'tbl_recommendation.application_id = tbl_application.user_id');
            $this->db->where('tbl_job', $job_id);
            $this->db->where('tbl_user', $user_id);

            $query = $this->db->get();

            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Recupera les recomanacions d'un usuari en una job
     * @param Array must contains job_id and user_id
     * @return if exists return array, else false
     */
    function get_number_recommendations($data)
    {
        try{
            $job_id = $data['job_id'];
            $user_id  = $data['user_id'];

            $this->db->from('tbl_recommendation');
            $this->db->join('tbl_application', 'tbl_recommendation.application_id = tbl_application.user_id');
            $this->db->where('tbl_job', $job_id);
            $this->db->where('tbl_user', $user_id);
            $this->db->get();

            return $this->db->count_all_results();
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * El User ha fet alguna job
     * @param Array $user_data (user_id)
     * @return true si el user ha fet alguna job, else false
     */
    function has_job($user_data){
        try{
            $query = $this->db->get_where('tbl_job', $user_data);

            return $query->num_rows() == 0;
        } catch (Exception $e) {
            return false;
        }
    }
}