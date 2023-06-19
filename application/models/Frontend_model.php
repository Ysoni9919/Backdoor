<?php 
class Frontend_model extends CI_Model {
    


    // home page start
    public function get_all_friend_listed($id){
    
        
        $this->db->select('my_friends_list.*,users.*');
        $this->db->join('users', 'users.id = my_friends_list.friend_id','left');
        
        $this->db->where('my_friends_list.my_id',$id);
        
        $this->db->order_by("my_friends_list.id", "desc");
        $users=$this->db->get('my_friends_list')->result_array();
        return $users;
        
    }    
   
    public function get_user_data($id){
    
        
        $this->db->select('users.*');
        $this->db->where('id',$id);
        $users=$this->db->get('users')->result();
        return $users;
        
    }    

    function user_login( $email ,$password ) {
		$data = array(
            'username'=>$email,
            'Password'=>$password
        );


            $query = $this->db->select('*')->from('users')->where('useremail',$email , 'password',$password);

         

            if($query=$this->db->get()->result())
            {
                return $query;
            }
            else{
                return false;
            }
	}

    
    public function get_all_category(){
    
        
        $this->db->select('*');
        $this->db->where('status',0);
        $users=$this->db->get('tags')->result();
        return $users;
        
    }    
    // home page End
    function user_register($data) {
		$this->db->insert('users',$data);
	}


































































































































































































// employe module start//
public function get_all_employee(){
    
    $this->db->select('contractor.name as contractor_name,employee_master.*');
    $this->db->join('contractor', 'contractor.id = employee_master.contractor_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->order_by("employee_master.id", "desc");
    $users=$this->db->get('employee_master')->result_array();
    return $users;

    // $this->db->join('employee_master_temp', 'employee_master_temp.employee_id = employee_master.id','left');
    // $this->db->order_by("employee_master.id", "desc");
    // $users=$this->db->get('employee_master')->result_array();
    // return $users;
    
}

public function get_all_employee_listed(){
    
    $this->db->select('employee_master.name,employee_master.id');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('employee_master.doe !=','');
    $this->db->order_by("employee_master.id", "desc");
    $users=$this->db->get('employee_master')->result_array();
    return $users;
    
    // $this->db->join('employee_master_temp', 'employee_master_temp.employee_id = employee_master.id','left');
    // $this->db->order_by("employee_master.id", "desc");
    // $users=$this->db->get('employee_master')->result_array();
    // return $users;
    
}

public function get_all_employee_listed1(){
    
    $this->db->select('employee_master.name,employee_master.id');
    $this->db->where('employee_master.doe !=','');
    $this->db->order_by("employee_master.id", "desc");
    $users=$this->db->get('employee_master')->result_array();
    return $users;
    
    // $this->db->join('employee_master_temp', 'employee_master_temp.employee_id = employee_master.id','left');
    // $this->db->order_by("employee_master.id", "desc");
    // $users=$this->db->get('employee_master')->result_array();
    // return $users;
    
}

public function get_all_employee_listed_by_user($id){
    
    $this->db->select('employee_master.name,employee_master.id');
    
    $this->db->where('employee_master.id',$id);
    $this->db->where('employee_master.id',$_SESSION['contractor_id']);
    $this->db->order_by("employee_master.id", "desc");
    $users=$this->db->get('employee_master')->result_array();
    return $users;
    
    // $this->db->join('employee_master_temp', 'employee_master_temp.employee_id = employee_master.id','left');
    // $this->db->order_by("employee_master.id", "desc");
    // $users=$this->db->get('employee_master')->result_array();
    // return $users;
    
}


public function create_employee($formarray){
    $this->db->insert("employee_master",$formarray);
    return $this->db->insert_id();
}
public function create_salary_processing($formarray){
    $this->db->insert("salary_processing",$formarray);
    return $this->db->insert_id();
 
}
public function create_ravison_wages($formarray){
    $this->db->insert("ravison_wages",$formarray);
    return $this->db->insert_id();
 
}


public function create_employee_temp($formarray){
    $this->db->insert("employee_master_temp",$formarray);
}


public function getemployee($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('employee_master')->result_array();
    return $userda;
    

}

public function getemployee_card_number($userid){
    $this->db->where('card_number',$userid);
    $userda=$this->db->get('employee_master')->result_array();
    return $userda;
    

}
public function getemployeetemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('employee_master_temp')->num_rows();
    return $userda;
    
    
}

public function importData($data) {
  
    $res = $this->db->insert_batch('employee_master',$data);
    if($res){
        return TRUE;
    }else{
        return FALSE;
    }

}


// employe module end//




// salary_processing module start//
public function get_all_mont_year_salary(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}
public function get_all_mont_year_salary1(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('salary_processing')->result_array();
    return $users;
    
}

public function create_salary_processing_temp($formarray){
    $this->db->insert("salary_processing_temp",$formarray);
}
public function getsalary_processing($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('salary_processing')->result_array();
    return $userda;
    

}
public function getsalary_processingtemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('salary_processing_temp')->num_rows();
    return $userda;
    
    
}
public function getmonth_salary($employee_id,$month){
    $this->db->select('SUM(act_working_day) as working_days');
    $this->db->where('employee_id',$employee_id);
    $this->db->where('month_year',$month);
    $userda=$this->db->get('salary_processing_temp')->result_array();
    return $userda;
    

}

public function getrate_of_bonus($month_year){
    $this->db->select('rate_of_bonus');
    $this->db->where('month_year',$month_year);
    $userda=$this->db->get('rate_of_bonus')->result_array();
    return $userda;
    

}
public function get_all_salary_processing($id){
    
    // $mon_year=date('m-Y');
    $this->db->select('employee_master.*,salary_processing.*,employee_master.id as emp_ids');
    $this->db->join('employee_master', 'employee_master.id = salary_processing.employee_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('salary_processing.month_year',$id);
    $this->db->where('salary_processing.status','');
    $this->db->or_where('salary_processing.status','want to update');
    $this->db->order_by("salary_processing.id", "desc");
    $users=$this->db->get('salary_processing')->result_array();
    return $users;
    
}

public function get_all_salary_process_report($id){
    

    $this->db->select('employee_master.*,salary_processing_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('salary_processing_temp.month_year',"$id");
    $this->db->order_by("salary_processing_temp.employee_id", "Asec");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}
public function get_all_bonus_report($start,$ended,$id=NULL){
   

    $this->db->select('employee_master.*,salary_processing_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    
    $this->db->where('month_year >=',"$start");
    $this->db->group_by('employee_master.id');
    // $this->db->where('month_year <=','03-2019');
    // $this->db->where('salary_processing_temp.month_year <',"$ended");
    // $this->db->order_by("salary_processing_temp.employee_id", "Asec");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}
public function get_all_bonus_report1($start,$ended,$id=NULL){
   

    $this->db->select('employee_master.*,salary_processing_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
 
    
    $this->db->where('month_year >=',"$start");
    $this->db->group_by('employee_master.id');
    // $this->db->where('month_year <=','03-2019');
    // $this->db->where('salary_processing_temp.month_year <',"$ended");
    // $this->db->order_by("salary_processing_temp.employee_id", "Asec");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}


public function get_full_final_report($id=NULL){
   

    $this->db->select('employee_master.*,salary_processing_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where_in('employee_master.id',$id);
    
    // $this->db->group_by('employee_master.id');
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}
public function get_full_final_report1($id=NULL){
   

    $this->db->select('employee_master.*,salary_processing_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
   
    $this->db->where_in('employee_master.id',$id);
    
    // $this->db->group_by('employee_master.id');
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}

public function get_all_rate_of_bonus_report(){
   

    $this->db->select('*');
    $this->db->order_by("id", "Desc");
    $users=$this->db->get('rate_of_bonus')->result_array();
    return $users;
    
}

public function updatesalary_processing($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('salary_processing',$formarray);
    
    

}
public function updaterate_of_bonus($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('rate_of_bonus',$formarray);
    
    

}
public function updateempdss($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('employee_master',$formarray);
    
    

}

public function get_all_mont_year_bonussheet(){
    

    $this->db->distinct();
    $this->db->select('salary_processing_temp.month_year');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->order_by("salary_processing_temp.month_year", "Desc");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}
public function get_all_mont_year_bonussheet1(){
    

    $this->db->distinct();
    $this->db->select('salary_processing_temp.month_year');
    $this->db->join('employee_master', 'employee_master.id = salary_processing_temp.employee_id','left');

    $this->db->order_by("salary_processing_temp.month_year", "Desc");
    $users=$this->db->get('salary_processing_temp')->result_array();
    return $users;
    
}

public function get_all_mont_year_rate_of_bonus(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $users=$this->db->get('rate_of_bonus')->result_array();
    return $users;
    
}

// salary_processing module end//

// ravison_wages module start//


public function getravison_wages($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('ravison_wages')->result_array();
    return $userda;
    

}
public function get_all_ravison_wages($id){
    

    $this->db->select('employee_master.*,salary_processing.*,ravison_wages.*');
    $this->db->join('employee_master', 'employee_master.id = ravison_wages.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = ravison_wages.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('ravison_wages.status','');
    $this->db->where('ravison_wages.month_year',"$id");
    $this->db->or_where('ravison_wages.status','want to update');
    
    $this->db->order_by("ravison_wages.id", "desc");
    $users=$this->db->get('ravison_wages')->result_array();
    return $users;
    
}

public function get_all_ravison_wages_report($id){
    

    $this->db->select('employee_master.*,salary_processing.*,ravison_wages_temp.*');
    $this->db->join('employee_master', 'employee_master.id = ravison_wages_temp.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = ravison_wages_temp.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('ravison_wages_temp.month_year',"$id");
    $this->db->order_by("ravison_wages_temp.employee_id", "Asec");
    $users=$this->db->get('ravison_wages_temp')->result_array();
    return $users;
    
}


public function getravison_wagestemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('ravison_wages_temp')->num_rows();
    return $userda;
    

}



public function get_all_mont_year_ravison_wages(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('ravison_wages_temp')->result_array();
    return $users;
}
public function get_all_mont_year_ravison_wages_old(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('ravison_wages')->result_array();
    return $users;
}

public function create_ravison_wages_temp($formarray){
    $this->db->insert("ravison_wages_temp",$formarray);
}

public function updateravison_wages($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('ravison_wages',$formarray);
    
    

}
// ravison_wages module end//


// sakary arreas module start//

public function get_all_salary_arreas($id){
    

    $this->db->select('employee_master.*,salary_processing.*,salary_arrears.*');
    $this->db->join('employee_master', 'employee_master.id = salary_arrears.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = salary_arrears.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('salary_arrears.month_year',"$id");
    $this->db->where('salary_arrears.status','');
    $this->db->or_where('salary_arrears.status','want to update');
    $this->db->order_by("salary_arrears.id", "desc");
    $users=$this->db->get('salary_arrears')->result_array();
    return $users;
    
}

public function get_all_salary_arrear_report($id){
    

    $this->db->select('employee_master.*,salary_processing.*,salary_arrears_temp.*');
    $this->db->join('employee_master', 'employee_master.id = salary_arrears_temp.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = salary_arrears_temp.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('salary_arrears_temp.month_year',"$id");
    $this->db->order_by("salary_arrears_temp.employee_id", "Asec");
    $users=$this->db->get('salary_arrears_temp')->result_array();
    return $users;
    
}

public function get_all_mont_year_arrear(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('salary_arrears_temp')->result_array();
    return $users;
    
}
public function get_all_mont_year_arrear1(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('salary_arrears')->result_array();
    return $users;
    
}
public function get_all_mont_year_arrear_old(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('salary_arrears')->result_array();
    return $users;
    
}

public function getsalary_arrears($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('salary_arrears')->result_array();
    return $userda;
    

}

public function getsalary_arrearstemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('salary_arrears_temp')->num_rows();
    return $userda;
    

}
public function create_salary_arrears($formarray){
    $this->db->insert("salary_arrears",$formarray);
}
public function create_salary_arrears_temp($formarray){
    $this->db->insert("salary_arrears_temp",$formarray);
}


public function updatesalary_arrears($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('salary_arrears',$formarray);
    
    

}

// sakary arreas module end//



// leave_encashment module start//


public function getleave_encashment($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('leave_encashment')->result_array();
    return $userda;
    

}
public function create_leave_encashment($formarray){
    $this->db->insert("leave_encashment",$formarray);
}
public function create_leave_encashment_temp($formarray){
    $this->db->insert("leave_encashment_temp",$formarray);
}

public function get_all_leave_encashment($id){
    

    $this->db->select('employee_master.*,salary_processing.*,leave_encashment.*,salary_processing.act_working_day as actually_working_days,salary_processing.incentive_temp_hour as incentive_hours');
    $this->db->join('employee_master', 'employee_master.id = leave_encashment.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = leave_encashment.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('leave_encashment.month_year',"$id");
    $this->db->where('leave_encashment.status','');
    $this->db->or_where('leave_encashment.status','want to update');
    $this->db->order_by("leave_encashment.id", "desc");
    $users=$this->db->get('leave_encashment')->result_array();
    return $users;
    
}
public function get_all_leave_encashment_report($id){
    

    $this->db->select('employee_master.*,salary_processing.*,leave_encashment_temp.*,salary_processing.act_working_day as actually_working_days,salary_processing.incentive_temp_hour as incentive_hours');
    $this->db->join('employee_master', 'employee_master.id = leave_encashment_temp.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = leave_encashment_temp.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('leave_encashment_temp.month_year',"$id");
    $this->db->order_by("leave_encashment_temp.employee_id", "Asec");
    $users=$this->db->get('leave_encashment_temp')->result_array();
    return $users;
    
}
public function getleave_encashmenttemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('leave_encashment_temp')->num_rows();
    return $userda;
    

}
public function get_all_mont_year_encashment(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('leave_encashment_temp')->result_array();
    return $users;
    
}
public function get_all_mont_year_encashment_old(){
    

    $this->db->distinct();
    $this->db->select('month_year');
    $this->db->order_by("month_year", "Asc");
    $users=$this->db->get('leave_encashment')->result_array();
    return $users;
    
}


public function updateleave_encashment($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('leave_encashment',$formarray);
    
    

}


// leave_encashment module end//


// contractor module start//

public function get_all_contractor(){
    
    $this->db->order_by("id", "desc");
    $users=$this->db->get('contractor')->result_array();
    return $users;
    
}



public function getcontractor($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('contractor')->result_array();
    return $userda;
    
    
}


public function create_contractor($formarray){
    $this->db->insert("contractor",$formarray);
    return $this->db->insert_id();
}
public function create_location($formarray){
    $this->db->insert("location",$formarray);
    return $this->db->insert_id();
}
public function create_department($formarray){
    $this->db->insert("department",$formarray);
    return $this->db->insert_id();
}
public function updatecontractor($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('contractor',$formarray);
    
    

}





// contractor module end//


// Login module start//

function check_email($email) 
	{
        $where = array(
			'username' => $email,
			'type' => 0
		);
		$this->db->select('*');
		$this->db->from('admin_superadmin');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
    }
function check_email2($email) 
	{
        $where = array(
			'username' => $email,
			'type' => 1
		);
		$this->db->select('*');
		$this->db->from('admin_superadmin');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
    }

    function check_password($email,$password)
    {
        $where = array(
            'username' => $email,
            'password' => md5($password)
        );
        $this->db->select('*');
        $this->db->from('admin_superadmin');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

// Login module end//

// Department module start//

public function get_all_department(){
    
    $this->db->order_by("id", "desc");
    $users=$this->db->get('department')->result_array();
    return $users;
    
}
public function getdepartment($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('department')->result_array();
    return $userda;
    

}
public function updatedepartment($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('department',$formarray);
    
    

}


// Department module end//




// location module start//
public function get_all_location(){
    
    $this->db->order_by("id", "desc");
    $users=$this->db->get('location')->result_array();
    return $users;
    
}
public function getlocation($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('location')->result_array();
    return $userda;
    

}
public function updatelocation($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('location',$formarray);
    
    

}
// location module end//


public function create($formarray){
    $this->db->insert("category",$formarray);
        
        
    }
   
   
    public function delete($userid){
        $this->db->where('id',$userid);
        $this->db->delete('category');
        

    }


    
    
    
    
    public function updatedata($userid,$formarray){
        $this->db->where('id',$userid);
        $userda=$this->db->update('category',$formarray);
        
        

    }

}

?>