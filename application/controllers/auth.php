<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('user/auth/login');
	}

	public function v_registrasi()
	{
		$this->load->view('user/auth/registrasi');
	}

	public function v_lupa_password()
	{
		$this->load->view('user/auth/lupa_password');
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'nama lengkap tidak boleh kosong']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', ['is_unique' => 'email anda telah terdaftar'], ['required' => 'Email tidak boleh kosong']);
		$this->form_validation->set_rules('asal_unit', 'Asal Unit', 'required|trim', ['required' => 'asal unit anda tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		if ($this->form_validation->run() == false) {
			$this->load->view('user/auth/registrasi');
		} else {
			$this->proses_registrasi();
		}
	}

	private function proses_registrasi()
	{
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		$data = [
			'nama' => $this->input->post('nama'),
			'asal_unit' => $this->input->post('asal_unit'),
			'email' => htmlspecialchars($email),
			'password' => password_hash($password, PASSWORD_BCRYPT),
			'status' => 1
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('insert', true);
		redirect('auth');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim', ['required' => 'email tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/auth/login');
		} else {
			$this->proses_login();
		}
	}

	private function proses_login()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$user = $this->db->get_where('users', ['email' => $email])->row_array();
		$cekpass = $this->db->get_where('users', array('password' => $password));

		if ($email == $user['email']) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id' => $user['id'],
					'email' => $user['email'],
					'nama' => $user['nama'],
					'asal_unit' => $user['asal_unit'],
				];
				$this->session->set_userdata($data);
				if ($user['status'] == '2') {
					redirect('user/user');
				} else {
					$this->session->unset_userdata('id');
					$this->session->unset_userdata('alamat');
					$this->session->unset_userdata('email');
					$this->session->unset_userdata('asal_unit');
					$this->session->set_flashdata('belumkonfirmasi', true);
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('passwordsalah', true);
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('emailsalah', true);
			redirect('auth');
		}
	}

	public function lupa_password()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'email tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		$this->form_validation->set_rules('konfir_password', 'Konfirmasi Password', 'required|trim|matches[password]', ['matches' => 'konfirmasi password salah']);
		if ($this->form_validation->run() == false) {
			$this->load->view('user/auth/lupa_password');
		} else {
			$this->proses_forgot();
		}
	}

	private function proses_forgot()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$user = $this->db->get_where('users', ['email' => $email, 'status' => 2])->row_array();

		if ($email == $user['email']) {

			if ($password = $this->input->post('password')) {

				$this->db->set('password', password_hash($password, PASSWORD_BCRYPT));
				$this->db->where('email', $email);
				$this->db->update('users');
				$this->session->set_flashdata('gantipass', true);
				redirect('auth');
			} else {
				$this->session->set_flashdata('gagal', true);
				redirect('auth/v_lupa_password');
			}
		} else {
			$this->session->set_flashdata('emailsalah', true);
			redirect('auth/v_lupa_password');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('asal_unit');

		$this->session->set_flashdata('logout', true);
		redirect('auth');
	}
}
