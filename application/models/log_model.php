<?php

class Log_model extends CI_Model
{

	function cats ()
	{
		$query = $this->db
				->select('DISTINCT(category)')
				->order_by('category')
				->get('logs');

		foreach ($query->result_array() as $row )
		{
			if (isset($row['category']))
			{
				$cats[] = $row['category'];
			}
		}

		return $cats;
	}

	function find_all ()
	{
		$select = "DATE( time ) AS Date,
				   TIME( time ) AS Time,
				   category AS Cat,
				   log AS Log,
				   id";

		$query = $this->db
				->select( $select )
				->get('logs');

		return $query->result_array();
	}

	function find_by_id ($id)
	{
		$query = $this->db->where('id', $id)->get('logs');
		return $query->row_array();
	}

	function create ($cat, $log)
	{
		$data = array(
			"category" => $cat,
			"log"      => $log
		);

		$this->db->insert('logs', $data );

		return ($this->db->affected_rows() > 0);
	}

	function update ($id, $cat, $log)
	{
		if ($this->log_model->find_by_id($id))
		{
			$data = array(
				"category" => $cat,
				"log"      => $log
			);
			$this->db->where('id', $id)->update('logs', $data );

			return ($this->db->affected_rows() > 0);
		}

		return FALSE;
	}

	function destroy ($id)
	{
		if ($this->find_by_id($id))
		{
			$this->db->delete('logs', array('id' => $id));
			return ($this->db->affected_rows() > 0);
		}

		return FALSE;
	}

}