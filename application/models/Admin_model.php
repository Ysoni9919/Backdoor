<?php
class Admin_model extends CI_Model {
 

    public function __construct()
    {
        parent::__construct();
        
    }
 

// employe module start//
public function get_all_employee(){
    
    $this->db->select('id');
    $this->db->where('status',"approved");
    $users=$this->db->get('employee_master')->result_array();
    return $users;
    
    
    
}




public function get_all_user(){
    
    $this->db->select('*');
    $this->db->order_by("id", "desc");
    $this->db->where('type !=',0);
    $users=$this->db->get('admin_superadmin')->result_array();
    return $users;

   
    
}
public function create_admin_user($formarray){
    $this->db->insert("admin_superadmin",$formarray);
    return $this->db->insert_id();
 
}

public function updateadmin_superadmin($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('admin_superadmin',$formarray);
    
    

}

public function get_admin_user($userid){
    $this->db->where('username',$userid);
    $userda=$this->db->get('admin_superadmin')->result_array();
    return $userda;
    

}
public function get_admin_user_by_id($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('admin_superadmin')->result_array();
    return $userda;
    

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


// salary_processing module start//
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
public function get_all_salary_processing($id){
    
    // $mon_year=date('m-Y');
    $this->db->select('employee_master.*,salary_processing.*,employee_master.id as emp_ids');
    $this->db->join('employee_master', 'employee_master.id = salary_processing.employee_id','left');
    $this->db->where('employee_master.contractor_id',$id);
    $this->db->where('salary_processing.month_year',date('m-Y'));
    $this->db->where('salary_processing.status','review');
    $this->db->or_where('salary_processing.status','updated by user');
    // $this->db->where('salary_processing.month_year',date('m-Y'));

    $this->db->order_by("salary_processing.id", "desc");
    $users=$this->db->get('salary_processing')->result_array();
    return $users;
    
}

public function updatesalary_processing($userid,$formarray){
    $this->db->where('id',$userid);
    $userda=$this->db->update('salary_processing',$formarray);
    
    

}

// salary_processing module end//

// ravison_wages module start//


public function getravison_wages($userid){
    $this->db->where('id',$userid);
    $userda=$this->db->get('ravison_wages')->result_array();
    return $userda;
    

}
public function get_all_ravison_wages(){
    

    $this->db->select('employee_master.*,salary_processing.*,ravison_wages.*');
    $this->db->join('employee_master', 'employee_master.id = ravison_wages.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = ravison_wages.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('ravison_wages.status','');
    $this->db->or_where('ravison_wages.status','want to update');
    
    $this->db->order_by("ravison_wages.id", "desc");
    $users=$this->db->get('ravison_wages')->result_array();
    return $users;
    
}
public function getravison_wagestemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('ravison_wages_temp')->num_rows();
    return $userda;
    

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

public function get_all_salary_arreas(){
    

    $this->db->select('employee_master.*,salary_processing.*,salary_arrears.*');
    $this->db->join('employee_master', 'employee_master.id = salary_arrears.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = salary_arrears.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('salary_arrears.status','');
    $this->db->or_where('salary_arrears.status','want to update');
    $this->db->order_by("salary_arrears.id", "desc");
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

public function get_all_leave_encashment(){
    

    $this->db->select('employee_master.*,salary_processing.*,leave_encashment.*');
    $this->db->join('employee_master', 'employee_master.id = leave_encashment.employee_id','left');
    $this->db->join('salary_processing', 'salary_processing.id = leave_encashment.salary_id','left');
    $this->db->where('employee_master.contractor_id',$_SESSION['contractor_id']);
    $this->db->where('leave_encashment.status','');
    $this->db->or_where('leave_encashment.status','want to update');
    $this->db->order_by("leave_encashment.id", "desc");
    $users=$this->db->get('leave_encashment')->result_array();
    return $users;
    
}
public function getleave_encashmenttemp($userid,$type){
    $this->db->where('employee_id',$userid);
    $this->db->where('temp_type',$type);
    $userda=$this->db->get('leave_encashment_temp')->num_rows();
    return $userda;
    

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
			'type' => 2,
			'status' => 0
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
			'type' => 1,
			'status' => 0
		);
		$this->db->select('*');
		$this->db->from('admin_superadmin');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
    }
function check_email3($email) 
	{
        $where = array(
			'username' => $email,
			'type' => 0,
			'status' => 0
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