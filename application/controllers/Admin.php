<?php

class Admin extends MY_Controller {

    public function index() {
        echo "in Admin";
    }

    public function dashboard(){
      $this->load->model('Articlesmodel', 'articles');
      $articleslist = $this->articles->list_articles();

      $this->load->view('admin/dashboard', ['articleslist'=>$articleslist]);
    }

    public function login(){
      $this->load->view('admin/admin_login');
    }
}

?>
