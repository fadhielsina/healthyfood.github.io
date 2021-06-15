<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function login()
	{
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$phone = $this->input->post('phone');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['phone' => $phone])->row();

			if ($user) {
				if (password_verify($password, $user->password)) {
					$data = [
						'id' => $user->id,
						'username' => $user->username,
						'email' => $user->email,
						'address' => $user->address,
						'phone' => $user->phone,
					];
					$this->session->set_userdata($data);
					redirect('welcome');
				} else {
					$this->session->set_flashdata('message', '
					<small class="text-danger"> Wrong Password ! </small>
					');
					redirect('welcome/login');
				}
			} else {
				$this->session->set_flashdata('message', '
					<small class="text-danger"> Phone Number not registered ! </small>
					');
				redirect('welcome/login');
			}
		}
	}

	function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|is_unique[user.phone]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password1]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];
			$this->db->insert('user', $data);
			redirect('welcome/login');
		}
	}

	function pilihan_pasar()
	{
		$this->load->view('pilihan_pasar');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('phone');

		$this->session->set_flashdata('message', '
		<small class="text-success"> Logout Success! </small>
		');
		redirect('welcome/login');
	}
}
