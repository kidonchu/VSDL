<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loghistory extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('loghistory_model');
    }
    public function index($page = 'home')
    {
        // If not signed in, redirect to Login screen
        if (!$this->login_model->checkLogin())
        {
            $this->session->set_userdata('err', "Please sign in to access Log page");
            redirect("login");
        }
        
        if (!file_exists('application/views/loghistory/'.$page.'.php'))
        {
            // Page does not exist
            show_404();
        }

        $data['title'] = "Log";
        $data['logs'] = $this->loghistory_model->getLogs();
        $this->load->view('loghistory/'.$page, $data);
    }

    public function record()
    {
        $this->loghistory_model->writeLog($this->input->post('log'));
        redirect("loghistory");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */