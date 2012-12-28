<?php

class Log_model extends CI_Model
{

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getLogs ()
    {
        $select = "DATE( timeTime ) AS Date,
                   TIME( timeTime ) AS Time,
                   strCategory AS Cat,
                   strLog AS Log";

        $query = $this->db
                ->select( $select )
                ->order_by( 'nID asc' )
                ->get( 'tblLog' );

        return $query->result_array();
    }

    public function getCats ()
    {
        $query = $this->db
                ->group_by( 'strCategory' )
                ->get( 'tblLog' );

        return $query->result_array();
    }

    public function writeLog ( $cat, $log )
    {
        $data = array(
            "strCategory" => $cat,
            "strLog"      => $log
        );
        
        $this->db->insert( 'tblLog', $data );
    }

}