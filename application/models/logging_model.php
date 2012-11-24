<?php
class Logging_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getLogs()
    {
        $this->db->order_by('nID', 'ASC');
        $query = $this->db->get('tblLog');
        return $query->result_array();
    }

    public function writeLog($text)
    {
        $data = array("strLog" => $text);
        $this->db->insert('tblLog', $data);
    }
}