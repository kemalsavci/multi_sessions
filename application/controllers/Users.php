<?php

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");

    }
    public function index(){
        echo "hoppala";
    }
    public function login(){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("eposta","E-posta","required|trim|valid_email");
        $this->form_validation->set_rules("sifre","Şifre","required|trim");
        $this->form_validation->set_message(array(
            "required"      => "<b>{field}</b> alanını boş bırakamazsınız",
            "valid_email"   => "Lütfen geçerli bir email adresi giriniz"
        ));

        if($this->form_validation->run() === FALSE){

            $viewdata = new stdClass();
            $viewdata->form_error = true;

            $this->load->view("login_v", $viewdata);
        }else{
            //var_dump($this);
            $user = $this->user_model->get(
                array(
                    "email" => $this->input->post("eposta"),
                    "password"  => $this->input->post("sifre")
                )
            );
            print_r($user);
        }
        //$this->load->view("homepage_v");
    }
    public function login_form(){
        $this->load->view("login_v");
    }
}