<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this-> data['hasil'] = $this-> model_crud-> getUser('data_user');
		$this-> load->view('welcome_message', $this->data);
	}

	public function form_input(){
		$this->load->view('form-input');
	}

	public function insert(){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$ip = $_POST['ip'];
		$data = array('nim' => $nim, 'nama' => $nama, 'IP' => $ip);
		$tambah = $this -> model_crud -> tambahData('data_user',$data);
		if($tambah > 0){
			redirect('welcome');
		}else{
			echo 'Gagal disimpan';
		}
	}
	public function delete($id){
		$hapus = $this->model_crud->hapusData('data_user',$id);
		if($hapus > 0){
			redirect('welcome');
		}else{
			echo 'Gagal dihapus';
		}
	}
	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('data_user',$id);
		$this->load->view('form-edit',$this->data);
	}
	public function update($id){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$ip = $_POST['ip'];
		$data = array('nim' => $nim, 'nama' => $nama, 'IP' => $ip);
		$edit = $this -> model_crud -> editData('data_user',$data,$id);
		if($edit > 0){
			redirect('welcome');
		}else{
			echo 'Gagal disimpan';
		}
	}

}
