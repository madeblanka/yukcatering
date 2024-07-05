<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct() {
		parent::__construct(); 
		$this->load->model('User_model');
	}
	private $_table = "tb_user";

    public $iduser;
    public $nik;
    public $nohp;
    public $password;
    public $nama;
    public $alamat;
    public $created_at;
    public $updated_at;


    public function dashboard()
    {
        $this->load->view('dashboard');
    }
    
	public function index()
	{
        $data['user'] = $this->User_model->getAll();
		$this->load->view('user/index',$data);
	}
	public function add()
    {
        $user = $this->User_model;
            $user->save();
            redirect(site_url('login/index'));
    }
    public function daftar()
    {
        $this->load->view('daftar');
    }
    public function edit($iduser = null)
    {
        $user = $this->User_model;
        $data["user"] = $user->getByiduser($iduser);
        $this->load->view("user/edit", $data);
	}
	public function update(){
		$iduser = $this->input->post('iduser',TRUE);
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$nama = $this->input->post('nama',TRUE);
		$jabatan = $this->input->post('jabatan',TRUE);
		$this->User_model->update($iduser,$username,$password,$nama,$jabatan);
        redirect(site_url('user/index'));
    }
}