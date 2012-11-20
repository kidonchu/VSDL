<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index($page = 'home')
    {
        // If already signed in, redirect to Manager screen
        if ($this->login_model->checkLogin())
            redirect("loghistory");
        
        if (!file_exists('application/views/login/'.$page.'.php'))
        {
            // Page does not exist
            show_404();
        }
        $data['title'] = "Login";
        $data['err'] = $this->session->userdata('err');
        $this->load->view('login/'.$page, $data);
    }

    public function log_in() // there needs to be underscore to distinguish from class name
    {
        if (!($username = $this->input->post('username')) ||
            !($password = $this->input->post('password')))
        {
            $this->session->set_userdata('err', "Both username and password should be input");
            redirect("login");
        }

        if (!$this->login_model->login($username, $password))
            redirect("login");
        
        redirect("loghistory");
    }

    public function logout()
    {
        $this->login_model->logout();
        redirect("login");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */