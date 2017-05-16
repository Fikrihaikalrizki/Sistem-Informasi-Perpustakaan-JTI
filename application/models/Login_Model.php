<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {
	PRIVATE $table_name;

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->table_name = 'daftar_user';	
		}	

		public function login($username,$password)
		{
			$this->db->select('id_user,username,password');
			$this->db->from('daftar_user');
			$this->db->where('username',$username);
			$this->db->where('password',MD5($password));

				$query = $this->db->get();
				if($query->num_rows()==1){
					return $query->result();
				}else{
					return false;
				}
			
		}
		
		public function insertRegister()
		{
			$password = $this->input->post('password');
			$object = array( 'nama_user' => $this->input->post('nama_user'),'nim'=> $this->input->post('nim'),'username' => $this->input->post('username'), 'password' => MD5($password));
			$this->db->insert('daftar_user', $object);
		}	

		PUBLIC function valid_id($username)
		{
			$query = $this->db->get_where($this->table_name, array('username' => $username));
			if ($query->num_rows() >0) 
			{
				return TRUE;	
			}
			else
			{
				return false;
			}
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>