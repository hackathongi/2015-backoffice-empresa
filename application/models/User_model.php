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
     * @param Array $user_data
     * @return if exists return array, else false

     */
    function getCommonFriends($user_data)
    {
        try{
            // TODO ApiFacebook getCommonFriends
        } catch (Exception $e) {
            return false;
        }
    }
}