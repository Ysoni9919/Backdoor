<?php

use phpDocumentor\Reflection\Types\Null_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Copywrite extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$logged_in = $this->session->userdata('logged_in_admin');
        if($logged_in == false)
        {
            redirect(base_url().'login');
        }
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// echo json_encode($_SESSION);


		$data=array();
		$data['user_type']="Pending";


		$this->load->view('admin/copywrite_table',$data);
	}
	public function pending()
	{
		// echo json_encode($_SESSION);


		$data=array();
		$data['user_type']="Pending";


		$this->load->view('admin/copywrite_table',$data);
	}
	public function approved()
	{
		// echo json_encode($_SESSION);

		$data=array();
		$data['user_type']="Approved";


		$this->load->view('admin/copywrite_table',$data);
	}
	
	public function rejected()
	{
		// echo json_encode($_SESSION);
		
		
		$data=array();
		$data['user_type']="Rejected";
		
		
		$this->load->view('admin/copywrite_table',$data);
	}
	
	
	
	
}
