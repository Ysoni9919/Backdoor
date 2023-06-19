<?php

use phpDocumentor\Reflection\Types\Null_;
use System\Support\Arr;

class Home extends CI_Controller
{


    function __construct() 
    {
        parent::__construct();
        $this->load->model('Frontend_model');
		// $logged_in = $this->session->userdata('logged_in_hod');
        // if($logged_in == false)
        // {
        //     redirect(base_url().'login');
        // }
    }


    public function index($id=Null) {
        $data=array();
        
        if($id == Null){
            $id=7;
            
        }else{
            $id=$id;
        }
        $all_friends_list = $this->Frontend_model->get_all_friend_listed($id);
        $get_user_data = $this->Frontend_model->get_user_data($id);
        // echo json_encode($all_friends_list);
        $data['friends_list']=$all_friends_list;
        $data['orignal_user']=$get_user_data;

       
        $this->load->view('frontfile/dashboard',$data);
        
    }

    public function register() {
        $this->load->view('frontfile/register');
    }
    public function login() {
        $this->load->view('frontfile/login');
    }

    public function loginAuth() {
        /* Check User Login Authentication */
        $this->form_validation->set_rules('username','Email_id','required');
        $this->form_validation->set_rules('password','Password','required');
       
        if( $this->form_validation->run() == FALSE ) {
            echo "failed";
        } else {
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            
            $validate =$this->Frontend_model->user_login($email ,$password);
            if($validate) {
                // $this->session->set_userdata('id',$validate->id);	
                // $this->session->set_userdata('username',$validate->username);	
                // $this->load->view('frontfile/dashboard');
                redirect(base_url().'home/dashboard');
                
            } else {
                $this->session->set_flashdata('error','Invalid login details.Please try again.');
                $this->load->view('frontfile/login');
            }
        }
    }


    public function register_post() {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username','UserName','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('dob','Date_of_Birth','required');

        if($this->form_validation->run() == false) {
            $this->load->view('frontfile/register');
        } else {
            if($this->input->post('save')) {
              $data = array(
                'useremail' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
                'dob' => $this->input->post('dob')
               );

                /* Tranferring Data in Model */
                $this->Frontend_model->user_register($data);
                $data['massage'] = "Data Insert Sucsesfull...";

                $this->load->view('frontfile/register',$data);
            }
        }
    }


    public function dashboard($id=Null) {
        $data=array();
        
        if($id == Null){
            $id=7;
            
        }else{
            $id=$id;
        }
        $all_friends_list = $this->Frontend_model->get_all_friend_listed($id);
        $get_user_data = $this->Frontend_model->get_user_data($id);
        // echo json_encode($all_friends_list);
        $data['friends_list']=$all_friends_list;
        $data['orignal_user']=$get_user_data;

       
        $this->load->view('frontfile/dashboard',$data);
    }

    public function setting() {
        $this->load->view('frontfile/setting');
        
    }
    public function table($id=Null) {
       
       $data=array();
        
        if($id == Null){
            $id=7;
            
        }else{
            $id=$id;
        }
        $all_category_list = $this->Frontend_model->get_all_category();
        $get_user_data = $this->Frontend_model->get_user_data($id);
        // echo json_encode($all_friends_list);
        $data['orignal_user']=$get_user_data;
       $data['all_category_list']=$all_category_list;



        $this->load->view('frontfile/table',$data);
    }

    public function table2() {
        $this->load->view('frontfile/table2');
    }
    
    public function community() {
        $this->load->view('frontfile/community');
    }

    public function advancesearch() {
        $this->load->view('frontfile/advancesearch');
    }

    public function advancesearch2() {
        $this->load->view('frontfile/advancesearch2');
    }
    public function chatting() {
        $data=array();
        
        if($id == Null){
            $id=7;
            
        }else{
            $id=$id;
        }
        $all_friends_list = $this->Frontend_model->get_all_friend_listed($id);
        $get_user_data = $this->Frontend_model->get_user_data($id);
        // echo json_encode($all_friends_list);
        $data['friends_list']=$all_friends_list;
        $data['orignal_user']=$get_user_data;
        $this->load->view('frontfile/chatting',$data);
    }

    

}

?>