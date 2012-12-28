<?php
if ( !defined( 'BASEPATH' ) )
    exit( 'No direct script access allowed' );

class Log extends CI_Controller
{

    public function __construct ()
    {
        parent::__construct();
        $this->load->model( 'log_model' );
    }

    public function index ( $page = 'home' )
    {
        $data[ 'title' ] = "Log";
        $data[ 'logs' ] = $this->log_model->getLogs();

        foreach ( $this->log_model->getCats() as $row )
        {
            $cats[ ] = $row[ 'strCategory' ];
        }

        $data[ 'cats' ] = $cats;
        $data[ 'base_url' ] = base_url();

        $this->load->view( 'log_home', $data );
    }

    public function record ()
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */