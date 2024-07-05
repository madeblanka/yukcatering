<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $iduser;
    public $nik;
    public $nohp;
    public $password;
    public $nama;
    public $alamat;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan nohp
        $this->db->where('nohp', $post["nohp"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = $post["password"] == $user->password;
            // jika password benar dan dia admin
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }

        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    public function getByiduser($iduser)
    {
        return $this->db->get_where($this->_table, ["iduser" => $iduser])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->iduser = null;
        $this->nik = $post["nik"];
        $this->nohp = $post["nohp"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->iduser = $post["iduser"];
        $this->nik = $post["nik"];
        $this->nohp = $post["nohp"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date();
        return $this->db->update($this->_table, $this, array('iduser' => $post['iduser']));
    }

    public function delete($iduser)
    {
        return $this->db->delete($this->_table, array("iduser" => $iduser));
    }    
   
}