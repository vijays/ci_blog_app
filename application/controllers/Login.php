<?php

class Login extends MY_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view('admin/admin_login');
    }

    public function admin_login(){
      $this->load->library('form_validation');

      $this->form_validation->set_rules('uid','User Id','required|alpha|min_length[5]|max_length[8]');
      $this->form_validation->set_rules('pwd','Password','required');

      $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

      if ( $this->form_validation->run() ){
        //Success
        $userid = $this->input->post('uid');
        $passwd = $this->input->post('pwd');
        echo "userid: $userid and passwd: $passwd";

        $this->load->model('Loginmodel');

        if ($this->Loginmodel->login_validation($userid, $passwd))
        {
          //success
          echo "Password match";
        }
        else {
          //failed
          echo "Password does not match";
        }
      }
      else{
        //Fail
        //echo validation_errors();
        $this->load->view('admin/admin_login');
      }
    }
}

?>
