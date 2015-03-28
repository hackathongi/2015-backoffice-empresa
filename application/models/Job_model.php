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
            return $this->db->insert('tbl_job', $job_data);
        } catch (Exception $ex) {
            return false;
        }
    }
    
    /**
     * Recupera un job
     * @param Array $job_data
     * @return boolean
     */
    function get($job_data) {
        try{
            $query = $this->db->get_where('tbl_job', $job_data);
            
            if ($query->num_rows() > 0) {
               return $query->row();
            }
            else {
                return false;
            }
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
            $this->db->update('tbl_job', $job_data);
        } catch (Exception $ex) {
            return false;
        }
    }
}