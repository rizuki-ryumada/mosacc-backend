<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index()
    {
        $this->load->view('acc/dashboard_v');
    }
    
}
;
/* End of file  index.php */