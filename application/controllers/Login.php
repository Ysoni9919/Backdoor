<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $error = '';

       $data=array();
        $logged_in_admin = $this->session->userdata('logged_in_admin');
      
        if($logged_in_admin)
        {
            redirect(base_url().'admin/dashboard');
        }
        // else if($logged_in_hod){
            
        //     redirect(base_url().'hod/dashboard');
        // }else if($logged_in_user){
        //     redirect(base_url().'user/dashboard');

        // }

        if(isset($_POST['form1'])) {

            // Getting the form data
            $email = $this->input->post('username',true);
            $password = $this->input->post('password',true);

            // Checking the email address
            $un = $this->Admin_model->check_email($email);

            if(!$un) {
                $error = 'Username is wrong!';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');

            } else {

                // When email found, checking the password
                $pw = $this->Admin_model->check_password($email,$password);

                if(!$pw) {
                    
                    $error = 'Password is wrong!';
                    $this->session->set_flashdata('error',$error);
                    redirect(base_url().'login');

                } else {

                    // When email and password both are correctll
                    

                    $array = array(
                        'id' => $pw['id'],
                        'username' => $pw['username'],
                        'logged_in_admin' => true,
                        'loggedin' => true
                    );
                    $this->session->set_userdata($array);
                    redirect(base_url().'admin/dashboard');
                }
            }
        }
        // else if(isset($_POST['form2'])) {

        //     // die();
        //     // Getting the form data
        //     $email = $this->input->post('username',true);
        //     $password = $this->input->post('password',true);

        //     // Checking the email address
        //     $un = $this->Admin_model->check_email2($email);
            
        //     if(!$un) {
        //         $error = 'Username is wrong!';
        //         $this->session->set_flashdata('error',$error);
        //         redirect(base_url().'login');
                
        //     } else {

        //         // When email found, checking the password
        //         $pw = $this->Admin_model->check_password($email,$password);

        //         if(!$pw) {
                    
        //             $error = 'Password is wrong!';
        //             $this->session->set_flashdata('error',$error);
        //             redirect(base_url().'login');
                    
        //         } else {
                    
        //             // When email and password both are correctll
                    
                    
        //             $array = array(
        //                 'id' => $pw['id'],
        //                 'username' => $pw['username'],
        //                 'logged_in_hod' => true
        //             );
        //             $this->session->set_userdata($array);
        //             redirect(base_url().'hod/dashboard');
        //         }
        //     }
        // }else if(isset($_POST['form3'])){
            
        //     $email = $this->input->post('username',true);
        //     $password = $this->input->post('password',true);
            
        //     // Checking the email address
        //     $un = $this->Admin_model->check_email3($email);

        //     if(!$un) {
        //         $error = 'Username is wrong!';
        //         $this->session->set_flashdata('error',$error);
        //         redirect(base_url().'login');

        //     } else {

        //         // When email found, checking the password
        //         $pw = $this->Admin_model->check_password($email,$password);

        //         if(!$pw) {
                    
        //             $error = 'Password is wrong!';
        //             $this->session->set_flashdata('error',$error);
        //             redirect(base_url().'login');

        //         } else {

        //             // When email and password both are correctll
                    
                    
        //             $array = array(
        //                 'id' => $pw['id'],
        //                 'username' => $pw['username'],
        //                 'logged_in_admin' => true
        //             );
        //             $this->session->set_userdata($array);
        //             redirect(base_url().'admin/dashboard');
        //         }
        //     }


        // }else{
            $this->load->view('login',$data);
        // }
        
    }

    function logout() {
        $this->session->sess_destroy();
        $error = 'Logout Successfully!';
        $this->session->set_flashdata('error',$error);
        redirect(base_url().'login');
    }
}
