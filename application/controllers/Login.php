<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
	}
    private $_table = "user";

    public $iduser;
    public $nik;
    public $nohp;
    public $password;
    public $nama;
    public $alamat;

	public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->User_model->doLogin())
            {
                    echo "<script>
                            alert('Selamat Datang !');
                            window.location.href='transaksi';
                            </script>";
        }else{
            echo "<script>
                    alert('Username atau Password yang anda masukan Salah!');
                    window.location.href='login/index';
                    </script>";
        }}
        // tampilkan halaman login
        $this->load->view("login");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // hancurkan semua sesi
        echo "<script>
        alert('Terimakasih !');
        window.location.href='index';
        </script>";

    }

}