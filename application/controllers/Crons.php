<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

require APPPATH . 'libraries/RestController.php';
class Crons extends RestController {

	public function all_auto_update_get()
	{
		$this->load->model('Admin_model');
		$this->load->model('Hod_model');
		header('Access-Control-Allow-Origin: *');
		header("Content-Type:application/json");
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method , Authentication");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		// echo 'here';
		
		$days_in_month = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
		// $days_in_month = 30;
		$present_month=date('m-Y');
		$today_date=date('d');

		$date1=$days_in_month."-".$present_month;
		$date2=$today_date."-".$present_month;

		
			// echo $date1.'this is bit';
			$all_employee = $this->Admin_model->get_all_employee();
		foreach ($all_employee as $key => $value) {
			# code...
			echo json_encode($value);
			// echo $value['id'];
			$last_id=$value['id'];
			// echo $last_i..d;
			$check_month=date('m-Y');
			// echo $check_month;
			$employee_data = $this->Hod_model->getsalary_processing_by_month($last_id,$check_month);
			// echo json_encode($employee_data);
			
			if ($employee_data == []){
				
			$datadd['employee_id'] = $last_id;
		$datadd['act_working_day'] = 0;
		$datadd['month_year'] = $check_month;
		$datadd['incentive_temp_hour'] = 0;
		$datadd['super_admin_status'] = 0;
		$datadd['status'] = '';
		$datadd['remarks'] = '';
		$datadd['datetime'] = date('Y-m-d h:i:s');


		$salary_main_id = $this->Hod_model->create_salary_processing($datadd);
		

		$datadd1['employee_id'] = $last_id;
		$datadd1['salary_id'] = $salary_main_id;
		$datadd1['revised_da'] = 0;
		$datadd1['month_year'] = $check_month;
		$datadd1['production_incentive_hours'] = 0;
		$datadd1['act_working_day'] = 0;

		$datadd1['super_admin_status'] = 0;
		$datadd1['status'] = '';
		$datadd1['remarks'] = '';
		$datadd1['datetime'] = date('Y-m-d h:i:s');

		$salary_id = $this->Hod_model->create_ravison_wages($datadd1);
		

		$datadd12['employee_id'] = $last_id;
		$datadd12['salary_id'] = $salary_main_id;
		$datadd12['revised_da'] = 0;
		$datadd12['act_working_day'] = 0;
		$datadd12['super_admin_status'] = 0;
		$datadd12['month_year'] = $check_month;
		$datadd12['status'] = '';
		$datadd12['remarks'] = '';
		$datadd12['datetime'] = date('Y-m-d h:i:s');
		$salary_id = $this->Hod_model->create_salary_arrears($datadd12);
		

		$datadd123['employee_id'] = $last_id;
		$datadd123['salary_id'] = $salary_main_id;
		$datadd123['total_no_el_encashed'] = 0;
		$datadd123['total_no_cl_encashed'] = 0;
		$datadd123['incentive_hours'] = 0;
		$datadd123['month_year'] = $check_month;
		$datadd123['actually_working_days'] = 0;
		$datadd123['super_admin_status'] = 0;
		$datadd123['status'] = '';
		$datadd123['remarks'] = '';
		$datadd123['datetime'] = date('Y-m-d h:i:s');
		$this->Hod_model->create_leave_encashment($datadd123);
		$datadd123['temp_type'] = 1;

		echo $value['id'].'= Added Succesfully<br>';

		// $this->session->set_flashdata('success', 'Employee Data Added Succesfully');

		}else{
			echo 'Already Update';
		}
	
		}
		// echo json_encode($all_employee[0]['id']);

		
	}
}
