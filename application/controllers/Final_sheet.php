<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Final_sheet extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('User_model');
		$logged_in = $this->session->userdata('logged_in_hod');
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
		if(isset($_POST['employee_select'])){
			$id=$_POST['employee_select'];
			// echo json_encode($id);
			// die();
		}else{
			$id=NULL;

		}
		$data = array();
		$total_rate_bonus=0;
		$yeardd=intval(date('Y'));
		if(date('m') >= '04'){
			$outyear=$yeardd+1;
			$years=$yeardd.'-'.$outyear;
			
		}else{
			$outyear=$yeardd-1;
			$years=$outyear.'-'.$yeardd;
			
			
			
		}
		$yearsed=explode("-",$years);
		
		if($id == null){
			
			$all_contractor1 = $this->User_model->get_all_employee_listed1();
			$all_employee = array();
			$data['ended_month']=0000;
			$data['started_month']=0000;
			$data['paged_name']='Final Sheet';
			
		}else{
			// $yearsed=explode("-",$id);
			// $started=str_replace(" ","",'04-'.$yearsed[0]);
			// $ended=str_replace(" ","",'03-'.$yearsed[1]);
			// // echo gettype($started);
			// echo gettype($ended);
			
			
			$all_contractor1 = $this->User_model->get_all_employee_listed1();
			$all_employee = $this->User_model->get_full_final_report1($id);
			// echo json_encode($all_employee);
			// die();
			$data['contractor_select_id'] = $id;
			// $data['ended_month']=$yearsed[1];
			// $data['started_month']=$yearsed[0];
			$data['paged_name']='Final Sheet for Employee';

			$all_employeeed = $this->User_model->get_all_rate_of_bonus_report();
		foreach ($all_employeeed as $key => $value) {
			
			// echo json_encode($value);
			// echo $started;
			// echo $yearsed[1];

			//  echo $yearsed[1];

			if($value['year'] == $yearsed[0] or $value['year'] == $yearsed[1] ){
				if($value['month'] >= '04' && $value['year'] ==  $yearsed[0] or $value['month'] <= '03' && $value['year'] ==  $yearsed[1] ){

					
					$total_rate_bonus=$total_rate_bonus+$value['rate_of_bonus'];
					
				}
				}


			}
			
		}

	
		$yearsed=explode("-",$years);
			$started=str_replace(" ","",'04-'.$yearsed[0]);
			$ended=str_replace(" ","",'03-'.$yearsed[1]);
		$data['ended_month']=$yearsed[1];
			$data['started_month']=$yearsed[0];
		
		// echo $years;
		// die();
		// echo json_encode($all_contractor1);
		$data['total_rate_bonus_ruppes']=$total_rate_bonus;

		$data['all_leave_encashment_employee'] = $all_employee;
		$data['all_contractor'] = $all_contractor1;
		$data['paged']='final_sheet';
		$this->load->view('hod/final',$data);
	}
	
	
}
