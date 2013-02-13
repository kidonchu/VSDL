<?php

class Log_model extends CI_Model
{

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
    }

    public function logs ()
    {
        $select = "DATE( time ) AS Date,
                   TIME( time ) AS Time,
                   category AS Cat,
                   log AS Log,
                   id";

        $query = $this->db
                ->select( $select )
                ->order_by('id asc')
                ->get('logs');

        return $query->result_array();
    }

    public function cats ()
    {
        $query = $this->db
                ->group_by('category')
                ->get('logs');

        return $query->result_array();
    }

    function find_by_id ($id)
    {
    	$query = $this->db->where('id', $id)->get('logs');
    	return $query->row_array();
    }

    public function create ($cat, $log)
    {
        $data = array(
            "category" => $cat,
            "log"      => $log
        );
        
        $this->db->insert('logs', $data );
    }

}