<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );

class Log extends CI_Controller
{

	public $_data;

	function __construct ()
	{
		parent::__construct();
		$this->load->model('log_model');
	}

	function index ()
	{
		$this->_data['title'] = "All Logs";
		$logs = $this->log_model->logs();

		foreach ($logs as $i => $log)
		{
			$logs[$i]['Log'] = anchor('log/edit/' . $log['id'], $log['Log'], 'target=_blank');
		}

		$this->_data['logs'] = $logs;

		foreach ( $this->log_model->cats() as $row )
		{
			if (isset($row['strCategory']))
			{
				$cats[] = $row['strCategory'];
			}
		}

		// $data[ 'cats' ] = $cats;

		$this->display("log/home");
	}

	function record ()
	{
		$itCat = $this->input->post( 'itCat' );
		$sCat = $this->input->post( 'sCat' );

		if ( empty( $itCat ) ) // If existing category
		{
			$cat = $sCat;
		}
		else // If new category
		{
			$cat = $itCat;
		}

		$log = $this->input->post( 'tLog' );

		$this->log_model->writeLog( $cat, $log );
		redirect( "log" );
	}

	function show ()
	{

	}

	function new_log ()
	{
		$this->_data['title'] = "New log";
		$this->display("log/new");
	}

	function create ()
	{
		echo "creating";
		// redirect("log");
	}

	function edit ($id)
	{
		$this->_data['title'] = "Edit log";
		$this->_data['log'] = $this->log_model->find_by_id($id);
		$this->display("log/edit");
	}

	function update ($id)
	{
		echo "updating";
		// redirect("log");
	}

	function destroy ($id)
	{
		echo "deleting";
		// redirect("log");
	}

	function display ($path)
	{
		ob_start();
		$this->load->view("include/header", $this->_data);
		$this->load->view($path, $this->_data);
		$this->load->view("include/footer", $this->_data);
		ob_end_flush();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */