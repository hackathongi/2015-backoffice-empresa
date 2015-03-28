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

    function getUser($id)
    {
        try{
            $where_conditions = array('id' => $id);

            $query = $this->db->get_where('tbl_user', $where_conditions);

            return $query->row_array();
        } catch (Exception $e) {
            echo 'UserModel Exception: ',  $e->getMessage(), "\n";
        }
    }

    function getCommonFriends($userAId, $userBId)
    {
        try{
            // TODO ApiFacebook getCommonFriends
        } catch (Exception $e) {
            echo 'UserModel Exception: ',  $e->getMessage(), "\n";
        }
    }
}