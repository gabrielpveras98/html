<?php


class Page extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			//$this->load->view('welcome_message');
			show_404();
		}

		$this->load->model('read', 'produtos');
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['produtos'] = $this->produtos->getProdutos();

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}
}
