<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Job_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }

    /**
     * Crea un job
     * @param Array $job_data
     * @return boolean
     */
    function create($job_data) {
        try {
            $title = $job_data['title'];
            $description = $job_data['description'];
            $start_date = $job_data['start_date'];
            $end_date = $job_data['end_date'];
            $city = $job_data['city'];
            
            $latitude = $job_data['latitude'];
            $longitude = $job_data['longitude'];
            $picture_url = $job_data['picture_url'];
            $owner_id = $job_data['owner_id'];
            
            if($latitude=='') $latitude = null;
            if($longitude=='') $longitude = null;
            
            $query="INSERT INTO tbl_job (title, description, start_date, "
                    . "end_date, city, latitude, longitude, picture_url, owner_id)"
                    . " VALUES('". $title ."','". $description ."',"
                    . "'". $start_date ."','". $end_date ."','". $city ."', "
                    . "'". $latitude ."', '". $longitude ."', '". $picture_url ."', ". $owner_id .")";
            return $this->db->query($query);
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * Recupera un job
     * @param Array $job_data
     * @return boolean/Array
     */
    function get($job_data = null) {
        try{
            if(!is_null($job_data)):
                $query = $this->db->get_where('tbl_job', $job_data);
            else:
                $query = $this->db->get('tbl_job');
            endif;
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            else {
                return false;
            }
        } catch (Exception $ex) {
            return false;
        }
    }
    
    function count($job_data= null) {
        try{
            $this->db->get_where('tbl_job', $job_data);
            return $this->db->count_all_results();
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * Actualitza un job
     * @param int $job_id
     * @param Array $job_data
     * @return boolean
     */
    function update($job_id, $job_data) {
        try{
            $this->db->where('id', $job_id);
            return $this->db->update('tbl_job', $job_data);
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * Elimina un job
     * @param Array $job_data
     * @return boolean
     */
    function delete($job_data) {
        try {
            return $this->db->delete('tbl_job', $job_data);
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * Get number users appliers from specific job
     * @param Array $job_data
     * @return int
     */
    function get_number_appliers($job_data) {
        try{
            $this->db->get_where('tbl_application', $job_data);
            return $this->db->count_all_results();
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * Get number users appliers from specific job
     * @param Array $job_data
     * @return boolean
     */
    /*
     *  select u.name, c.picture_url from tbl_job j
        join tbl_application a on a.job_id = j.id
        join tbl_user u on a.user_id = u.id
        join tbl_contact c on c.user_id = u.id
        where j.id = 3;
    */
    function get_appliers($job_data)
    {
        try {
            $this->db->select('tbl_user.name', 'tbl_contact.picture_url');
            $this->db->join('tbl_application', 'tbl_application.job_id = tbl_job.id');
            $this->db->join('tbl_user', 'tbl_application.user_id = tbl_user.id');
            $this->db->join('tbl_contact', 'tbl_contact.user_id = tbl_user.id');
            $this->db->where('tbl_job',$job_data);

            return $this->db->get();
        } catch (Exception $ex) {
            return false;
        }
    }
}