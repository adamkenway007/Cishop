<?php
class Templates extends MX_controller
{

	function __construct() {
	parent:: __construct();
	}

	function test(){
		$data = "";
		$this->public_jqm($data);
		$this->load->helper('url');
	}

	function public_bootstrap($data)
	{
		if (!isset($data['view_module'])) {
			$data['view_module'] = $this->uri->segment(1);
		}

		$this->load->view('public_bootstrap', $data);		
	}

	function public_jqm($data) 
	{
		if (!isset($data['view_module'])) {
			$data['view_module'] = $this->uri->segment(1);
		}

		$this->load->view('public_jqm', $data);
	}

	function admin($data)
	{
		if (!isset($data['view_module'])) {
			$data['view_module'] = $this->uri->segment(1);
		}
		
		$this->load->view('admin', $data);
	}
}