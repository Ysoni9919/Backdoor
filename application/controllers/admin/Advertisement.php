<?php

use phpDocumentor\Reflection\Types\Null_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends CI_Controller {

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
		$data['user_type']="Approved";


		$this->load->view('admin/advertisement',$data);
	}
	public function approved()
	{
		// echo json_encode($_SESSION);

		$data=array();
		$data['user_type']="Approved";


		$this->load->view('admin/user_table',$data);
	}
	
	public function blocked()
	{
		// echo json_encode($_SESSION);
		
		
		$data=array();
		$data['user_type']="Blocked";
		
		
		$this->load->view('admin/user_table',$data);
	}
	
	public function chatting_detail($id=NULL)
	{
		// echo json_encode($_SESSION);


		

			
			
			$this->load->view('admin/user_chatting_details',$data);
		
	}
	public function chatting($id=NULL)
	{
		// echo json_encode($_SESSION);


		

			
			
			$this->load->view('admin/user_chatting',$data);
		
	}
	public function files_list($id=NULL)
	{
		// echo json_encode($_SESSION);


		

			
			
			$this->load->view('admin/user_file_list',$data);
		
	}
	public function add()
	{
		// echo json_encode($_SESSION);


		

			
			
			$this->load->view('admin/advertisement_add_form',$data);
		
	}
	
	
}
