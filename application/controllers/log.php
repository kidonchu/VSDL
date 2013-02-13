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
		$logs = $this->log_model->find_all();

		foreach ($logs as $i => $log)
		{
			$logs[$i]['Log'] = anchor('log/edit/' . $log['id'], $log['Log']);
		}

		$this->_data['logs'] = $logs;

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

	function new_log ()
	{
		$this->_data['title'] = "New log";
		$this->_data['cats'] = $this->log_model->cats();
		$this->display("log/new");
	}

	function create ()
	{
		$cat = $this->input->post('cat');
		$new_cat = $this->input->post('new_cat');
		$log = $this->input->post('log');

		if ( ! empty($new_cat)) // add new category
		{
			$cat = $new_cat;
		}

		if ($this->log_model->create($cat, $log))
		{
			redirect("log");
		}
		else
		{
			redirect("log/new_log");
		}
	}

	function edit ($id)
	{
		if ($log = $this->log_model->find_by_id($id))
		{
			$this->_data['title'] = "Edit log";
			$this->_data['cats'] = $this->log_model->cats();
			$this->_data['log'] = $log;
			$this->display("log/edit");
		}
		else
		{
			redirect("log");
		}
	}

	function update ($id)
	{
		$cat = $this->input->post('cat');
		$new_cat = $this->input->post('new_cat');
		$log = $this->input->post('log');

		if ( ! empty($new_cat)) // add new category
		{
			$cat = $new_cat;
		}

		$this->log_model->update($id, $cat, $log);

		redirect("log");
	}

	function destroy ($id)
	{
		if ($this->log_model->destroy($id, $cat, $log))
		{

		}

		redirect("log");
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