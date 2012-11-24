<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logging extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('logging_model');
    }
    public function index($page = 'home')
    {
        if (!file_exists('application/views/logging/'.$page.'.php'))
        {
            // Page does not exist
            show_404();
        }

        $data['title'] = "Log";
        $data['logs'] = $this->logging_model->getLogs();
        $this->load->view('logging/'.$page, $data);
    }

    public function record()
    {
        $this->logging_model->writeLog($this->input->post('log'));
        redirect("logging");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */