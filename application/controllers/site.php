<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->is_logged_in()) {
            redirect('login');
        }
    }

    public function index() {

        if ($this->session->userdata('role') == 'admin') {
            $this->load->view('admin_home');
        }

        if ($this->session->userdata('role') == 'staff') {
            $this->load->view('staff');
        }
    }

    private function is_logged_in() {
        return $this->session->userdata('is_logged_in');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('site');
    }

}
/* End of file main.php */